<?php

namespace App\Http\Controllers;

use App\Models\CouncilDesignation;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Testimonial;
use App\Models\Department;
use App\Models\SubDepartment;
use App\Models\Scheme;
use App\Models\Fund;
use App\Models\CouncilMembers;
use App\Models\ScopeCategory;
use App\Models\ScopeImage;
use App\Models\ScopeWork;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\AboutUsCategory;
use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Input;

class HomeController extends Controller
{

    public function LogIn() {    
        return view('Login_page');
    }

    // HomepageData------------
    public function index()
    {

        $title1 = Event::where('event_category_id', 1)->orderBy('id', 'DESC')->paginate(3);
        $title2 = Event::where('event_category_id', 2)->orderBy('id', 'DESC')->paginate(3);
        $title3 = Event::where('event_category_id', 3)->orderBy('id', 'DESC')->paginate(3);


        //View scopes of works in index page start
        $scopes = DB::table('scope_works')
            ->join('scope_categories', 'scope_categories.id', '=', 'scope_works.scope_category_id')
            ->select('scope_categories.*','scope_works.*')
            ->limit(4)
            ->get();

        $scope_image = [];
        $i = 0;
        foreach ($scopes as $scope) {
            $j = 0;
            $images = ScopeImage::where('scope_category_id', $scope->scope_category_id)->select('scope_image')->get();
            foreach ($images as $image) {
                $scope_image[$i][$j] = $image['scope_image'];
                $j++;
            }
            $i++;
        }
        //View scope of works end

        
        $department = Department::get();

        $data = Gallery::where('gallery_category_id', '1')->orderBy('id', 'DESC')->paginate(2);
        $data1 = Gallery::where('gallery_category_id', '1')->first();

        $testimonial = Testimonial::get();
        return view('index', compact('data', 'data1', 'title1', 'title2', 'title3', 'testimonial', 'department','scopes', 'scope_image'));
    }


    


    

    //Update Department Name
    public function updateDepartment(Request $request, Department $department)
    {
        $request->validate([
            'department_name' => 'required',
            
        ]);
    
        $department->update($request->all());
        return redirect('admin/departments')->with('success', 'Department Updated');
    
    }

    //Delete Department
    public function destroy(Department $department)
    {
        $department->delete();
    
        return redirect('admin/departments')->with('success', 'Department Deleted');

    }

    
    

    

    


    


    



    


    


    


    

    


    


    //Homepage
    public function aboutUs()
    {
        return view('about_us');
    }
    public function about_Us_Mac_Area()
    {
        return view('about_us_mac_area');
    }

    public function aboutUsMac()
    {
        return view('aboutusmac');
    }

    public function about_Us_Missing()
    {
        return view('about_us_missing');
    }

    public function aboutUsPower()
    {
        return view('about_us_power');
    }

    public function about_Us_Formulation()
    {
        return view('about_us_formulation');
    }

    public function about_UsMac_Act()
    {
        return view('about_us_mac_act');
    }


    // For departments
    public function Executive()
    {
        return view('executive');
    }
    public function Gen_Member()
    {
        return view('department-general');
    }
    public function Staff()
    {
        return view('department-office');
    }
    public function Schemes()
    {
        $scheme = Scheme::orderBy('id', 'Desc')->get();
        return view('department-schemes', compact('scheme'));
    }


    //For Announcements
    public function Livelihood()
    {
        $livelihood = Gallery::where('gallery_category_id', '6')->orderBy('id', 'DESC')->get();
        return view('infras-livelihood', compact('livelihood'));
    }
    public function Announcement()
    {
        $event = Event::where('event_category_id', '1')->orderBy('id', 'DESC')->get();
        return view('announcement-links', compact('event'));
    }



    public function Scopeofworks()
    {
       
        $scopes = DB::table('scope_works')
            ->join('scope_categories', 'scope_categories.id', '=', 'scope_works.scope_category_id')
            ->select('scope_categories.*','scope_works.*')
            ->get();

        $scope_image = [];
        $i = 0;
        foreach ($scopes as $scope) {
            $j = 0;
            $images = ScopeImage::where('scope_category_id', $scope->scope_category_id)->select('scope_image')->get();
            foreach ($images as $image) {
                $scope_image[$i][$j] = $image['scope_image'];
                $j++;
            }
            $i++;
        }
        return view('scope-of-works', compact('scopes', 'scope_image'));
    }



    public function Funding()
    {
        $fund = Fund::orderBy('id', 'ASC')->get();
        return view('department-funds', compact('fund'));
    }



    //For Gallery Page
    public function view_Gallery()
    {
        $image = Gallery::where('gallery_category_id','>', '1')->orderBy('id', 'DESC')->get();
        $cat1 = Gallery::where('gallery_category_id', '3')->orderBy('id', 'DESC')->get();
        $cat2 = Gallery::where('gallery_category_id', '4')->orderBy('id', 'DESC')->get();
        $cat3 = Gallery::where('gallery_category_id', '5')->orderBy('id', 'DESC')->get();


        return view('gallery', compact('image','cat1','cat2','cat3'));
    }


    //For Contact Us
    
   public function ContactUs()
   {
       $contact = Contact::orderBy('id', 'ASC')->get();
    return view('contact-us-mac', compact('contact'));

   }

    public function Faq() {
       
        return view('faq');
    }

    

    
}
