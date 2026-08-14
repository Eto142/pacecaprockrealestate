<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Country;
use App\Models\House;
use App\Mail\contactEmail;
use App\Mail\propertyEmail;
use App\Mail\contactUsEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

   public function index()
   {   
       $houses = House::all();
       $countries = Country::all();
       $latestHouses= House::orderBy('created_at','DESC')->get()->take(3);
       $trendingHouses= House::where('status','1')->get()->take(20);
       return view('home.homepage', compact('houses','countries','latestHouses','trendingHouses'));
   }
   public function about()
   {   
       $houses = House::all();
       $countries = Country::all();
       return view('home.about', compact('houses','countries'));
   }

   public function agent()
   {   
       $houses = House::all();
       $countries = Country::all();
       return view('home.agent', compact('houses','countries'));
   }

   public function contact()
   {   
       $houses = House::all();
       $countries = Country::all();
       return view('home.contact', compact('houses','countries'));
   }

   public function services()
   {   
       $houses = House::all();
       $countries = Country::all();
       return view('home.services', compact('houses','countries'));
   }

   public function terms()
   {   
       $houses = House::all();
       $countries = Country::all();
       return view('home.terms', compact('houses','countries'));
   }
           
   public function bookmark()
    {
    $houses = House::all();
    $countries = Country::all();
    return view('home.bookmark',compact('houses','countries'));
    }

   public function portfolio()
   {   
       $houses = House::all();
       $countries = Country::all();
       return view('home.portfolio', compact('houses','countries'));
   }
   

   public function countryHouse($country_slug)
   {    
       $countries = Country::all();
       $country = Country::where('slug',$country_slug)->first();
       if($country){
            $countryHouses= $country->countryHouse()->get();
            return view('home.country-houses', compact('countries','country','countryHouses'));
       }
       else{
           return redirect()->back();        }
 
   }


   public function houseDetails($country_slug, $house_slug, $house_id)
   {
       if(Country::where('slug',$country_slug)->exists())
       {    
           if(House::where('slug', $house_slug)->exists())
           {
            if(House::where('id', $house_id)->exists())
           {
               $countries = Country::all();
               $trendingHouses= House::where('trending','1')->get()->take(2);
               $house = House::where('id',$house_id)->first();
               return view('home.house-details', compact('countries','house','trendingHouses'));
           } else{
               return redirect()->back();
           }
        }
           else{
               return redirect()->back();
           }

       }else {
           return redirect()->back();
       }
       
   }

   public function more()
   {   
       $houses = House::all();
       $countries = Country::all();
       $latestHouses= House::orderBy('created_at','DESC')->get()->take(4);
       $trendingHouses= House::where('trending','1')->get()->take(20);
       return view('home.moreHouses', compact('houses','countries','latestHouses','trendingHouses'));
   }
   
  public function bookMarkEmail(Request $request)
          {
         $houses = House::all();
         $countries = Country::all();
         $latestHouses= House::orderBy('created_at','DESC')->get()->take(3);
         $trendingHouses= House::where('status','1')->get()->take(20);
              
            $data = [
              'name' =>$request->name,
              'email' =>$request->email, 
              'phone' =>$request->phone,
              'country' =>$request->country, 
              'pDate' =>$request->pDate,
            ];


            

         Mail::to('contact@caprockrealestates.com')->send(new contactEmail($data));
            
          
           return view('home.homepage',compact('houses','countries','latestHouses','trendingHouses'))->with('message', 'Bookmark created successfully,Cap Rock Real Estate LLC will contact you soonest');
      
          }
          
    public function propertyEmail(Request $request)
         {
              
         $houses = House::all();
         $countries = Country::all();
         $latestHouses= House::orderBy('created_at','DESC')->get()->take(3);
         $trendingHouses= House::where('status','1')->get()->take(20);
              
            $data = [
              'name' =>$request->name,
              'email' =>$request->email, 
              'phone' =>$request->phone,
              'country' =>$request->country, 

            ];


            

         Mail::to('contact@caprockrealestates.com')->send(new propertyEmail($data));
            
          
         return view('home.homepage',compact('houses','countries','latestHouses','trendingHouses'))->with('message', 'Bookmark created successfully,Cap Rock Real Estate LLC will contact you soonest');
        }
        
        public function contactUsEmail(Request $request)
         {
              
         $houses = House::all();
         $countries = Country::all();
         $latestHouses= House::orderBy('created_at','DESC')->get()->take(3);
         $trendingHouses= House::where('status','1')->get()->take(20);
              
            $data = [
              'name' =>$request->name,
              'email' =>$request->email, 
              'subject' =>$request->subject,
              'message' =>$request->message, 

            ];


            

         Mail::to('info@caprockrealestates.com')->send(new contactUsEmail($data));
            
          
         return view('home.homepage',compact('houses','countries','latestHouses','trendingHouses'))->with('message', 'Contact With us successfully');
        }
          
             
        public function whatsapp(Request $request)
          
          {
              
      
            return redirect('https://api.whatsapp.com/send?phone=+13853815212&text=Hello');
      
          }
   
   

}
