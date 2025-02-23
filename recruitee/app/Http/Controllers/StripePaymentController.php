<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Illuminate\Support\Facades\DB; // Import DB facade
use Mail;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $req)
    {
        $plans = DB::table('plans')
                  ->where('id', $req->plan_id)
                  ->first();
        return view('stripe',compact("plans"));
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $plan_id=$request->plan_id;
        $type=$request->type;
        $name=$request->name;
        $price=$request->price;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment For Recruiters Plan From The Recruiters." 
        ]);
      
        Session::flash('success', 'Payment successful!');
        if ($request->session()->has('FRONT_USER_ID')) {
            $uid = $request->session()->get('FRONT_USER_ID');
            
            $arr = [
                "status" => "Paid",
                "type" => $type,
                "name" => $name, // Hash the password using bcrypt
                "plan_id"=>$plan_id,
                "user_id"=>$uid,
                "price"=>$price,
            ];
            $charges = DB::table('charges')->insert($arr);

            if($charges){
                $update = DB::table('users')
                ->where('id', $uid)
                ->update([
                    'status_paid' => 1,
                    'plan_id' => $plan_id // Update plan_id here
                ]);
                if($update){
                        $billing = DB::table('users')
                        ->where(['id' => $uid])
                        ->first();
                        if($billing->status_paid==1){
                        $data=['name'=>$billing->name];
                        $user['to']=$billing->email;
                        Mail::send('register_success',$data,function($messages) use ($user){
                            $messages->to($user['to']);
                            $messages->subject('Job Success');
                        });
                            return redirect('/');
                        }else {
                            return redirect('/plan');
                        }
                 }
                
                
            }
            
        }else{
            return back();
        }
              
        
    }
}
