<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\case_studie;
use App\Models\soltions;
use App\Models\subscriber;
use App\Models\team;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{

    public function brochuredownload(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email'
        ]);
    
        $file = public_path()."/assets/pdf/sample.pdf";
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        $client = new subscriber();
        $client->email = $request->email;
        $client->save();

        Mail::raw($request->email.' has downloaded brochure', function($message) use ($request) {
            $message->to('info@fidelisgroup.in', 'Fidelis new subscriber')->subject('New Subscription from website');
            $message->from($request->email, '');
         });

        return response()->download($file, 'managedservice.pdf',$headers);
    }

    public function contactRequestPost(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
    
        Log::info($request->all());

        $data = array(
            'name'=> $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        );

        $name = $data['name'];
        $email = $data['email'];

        $adminemail = 'Name : '. $data['name'].' Email '.$data['email'].' Phone '.$data['phone'].' Subject '.$data['subject'].' Message '.$data['message'];

        try {
            Mail::raw( $adminemail,  function($message) use ($name, $email, $adminemail) {
                $message->to('nilesh.g@fidelisgroup.in', 'Nilesh G')->subject('Contact Mail From Fidelis');
                $message->from($email,$name);
            });
    
            Mail::send('mail', $data, function($message) use ($name, $email) {
                $message->to($email, $name)->subject('Thank you for contacting - FidelisGroup');
                $message->from('support@fidelisgroup.in','Support');
            });

            return response()->json(['success'=>'Thank you for contacting.']);
        } catch (\Throwable $th) {
            Log::emergency($th->getMessage());
        }
    }

    public function subscription(Request $request){
        $data = array('email' => $request->email);

        Mail::raw('Thank you for subscribing', function($message) use ($request) {
            $message->to('info@fidelisgroup.in', 'Fidelis subscriber')->subject('New Subscription from website');
            $message->from($request->email, '');
         });
         echo "ok";
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function pressRelease(){
        return view('pages.press-release');
    }

    public function home1(){
        return view('home1');
    }

    public function home2(){
        return view('home2');
    }

    public function home3(){
        return view('home3');
    }

    public function home4(){
        return view('home4');
    }

    public function home5(){
        return view('home5');
    }

    public function home6(){
        return view('home6');
    }

    public function jobslanding(){
        return view('jobslanding');
    }

    public function autocompleteSearch(Request $request){
        $query = $request->get('query');
        $searchResult = Http::get('https://newsapi.org/v2/everything?q=Apple&from=2023-01-04&sortBy=popularity&apiKey=9afae3f6f72e46f0b654ceb1cf5d3afd');
        $filterResult = json_decode($searchResult->body(), true);
        $filterResult = $filterResult['articles'];
        // $filterResult = blog::where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }

    public function searchResult(Request $request){
        return view('pages.search-result');
    }

    public function privacy(){
        return view('pages.privacy');
    }

    public function copyright(){
        return view('pages.copyright');
    }

    public function locations(){
        $locations = array(
            array(
                'company' => 'Fidelis Technologies.',
                'city' => 'Hubli',
                'address' => 'IBMR, Co-working & Startups, 3rd floor, Akshay Plaza, Akshay colony, Vidyanagar, Hubli - 580021'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Bengaluru',
                'address' => 'No. 357, 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka - 560034, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Mumbai',
                'address' => 'Suprabhat, Bldg No. 46, Office No: 2250 Gandhinagar, Bandra (East), Near MIG Cricket Club, Bandra Kalanagar Complex, Opp MHADA Office, Mumbai – 400051, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Jammu & Kashmir',
                'address' => '#72, Naikpora, Padshahi Bagh Srinagar, Kashmir -190008, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Hyderabad',
                'address' => 'Phoenix Tech Tower Private Limited, Genpact Road Plot No.14/46, 1st Floor, Phoenix Tech Tower, Uppal, Hyderabad, Telangana-500039, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Chennai',
                'address' => 'KRM Plaza, 8th, South Tower, KRM Plaza, Harrington Road 2, Chetpet, Chennai, Tamil Nadu-600031, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Delhi/ NCR',
                'address' => 'Unitech Cyber Park, Tower- B, 10th Floor, Unitech Cyber Park, Sector 39, Gurugram, Haryana-12200, INDIA'
            ),
            array(
                'company' => 'Fidelis Group, INC,',
                'city' => 'United States',
                'address' => '2609 Crooks Road #216,Troy, Michigan State, USA 48084',
                'email' => 'info-usa@fidelisgroup.in'
            ),
            array(
                'company' => 'Fidelis Technologies Pte Ltd',
                'city' => 'Singapore APAC',
                'address' => '111 Somerset Road, #08-10A, 111 Somerset, Singapore, 238164, Singapore',
                'email' => 'info-sg@fidelisgroup.in'
            ),
            array(  
                'company' => 'Fidelis Technologies',
                'city' => 'Dubai',
                'address' => 'Office 08 J-0118, Warehouse -P1, Block J, Saih Shuaib 2, Dubai, UAE',
                'email' => 'info-uae@fidelisgroup.in'
            )
        );

        return view('pages.locations', compact('locations'));
    }

    public function casestudies(){
        $casestudy = case_studie::all();
        return view('pages.case-studies', compact('casestudy'));
    }

    public function casestudiesv2(){
        return view('pages.case-studies-v2');
    }

    public function casedetails($slug){
        $slug = str_replace('-', ' ', $slug);
        $detail = case_studie::where('name',$slug)->get();
        return view('pages.case-details', compact('detail'));
    }

    public function clients_speak(){
        return view('pages.clients-speak');
    }

    public function why_choose_us(){
        return view('pages.why-choose-us');
    }

    public function partners_alliances(){
        return view('pages.partners-alliances');
    }

    public function corporate_governance(){
        return view('pages.corporate-governance');
    }

    public function mission_vision_values(){
        return view('pages.mission-vision-values');
    }

    public function journey(){
        return view('pages.journey');
    }

    public function people(){
        return view('pages.people-culture');
    }
    
    public function our_competencies(){
        $competencies = soltions::all();
        return view('pages.competencies', compact('competencies'));
    }

    public function about_us(){
        $team = team::all();
        return view('pages.about-us', compact('team'));
    }

    public function team_member($person){
        $details = team::where('name', $person)->get();
        return view('pages.teammember', compact('details'));
    }

    public function journal(){
        $blogs = blog::all();
        return view('pages.blog', compact('blogs'));
    }

    public function article($articleid){
        $blog = blog::where('name', $articleid)->get();
        return view('pages.article', compact('blog'));
    }

    public function retail_ecommerce(){
        return view('pages.retail-ecommerce');
    }

    public function enterprise_technology(){
        return view('pages.enterprise-technology');
    }

    public function manufacturing(){
        return view('pages.manufacturing');
    }

    public function healthcare(){
        return view('pages.healthcare');
    }

    public function fintech(){
        return view('pages.fintech');
    }

    public function banking(){
        return view('pages.banking');
    }

    public function contactus(){
        $locations = array(
            array(
                'company' => 'Fidelis Technologies.',
                'city' => 'Hubli',
                'address' => 'IBMR, Co-working & Startups, 3rd floor, Akshay Plaza, Akshay colony, Vidyanagar, Hubli - 580021'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Bengaluru',
                'address' => 'No. 357, 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka - 560034, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Mumbai',
                'address' => 'Suprabhat, Bldg No. 46, Office No: 2250 Gandhinagar, Bandra (East), Near MIG Cricket Club, Bandra Kalanagar Complex, Opp MHADA Office, Mumbai – 400051, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Jammu & Kashmir',
                'address' => '#72, Naikpora, Padshahi Bagh Srinagar, Kashmir-190008, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Hyderabad',
                'address' => 'Phoenix Tech Tower Private Limited, Genpact Road Plot No.14/46, 1st Floor, Phoenix Tech Tower, Uppal, Hyderabad, Telangana-500039, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Chennai',
                'address' => 'KRM Plaza, 8th, South Tower, KRM Plaza, Harrington Road 2, Chetpet, Chennai, Tamil Nadu-600031, INDIA'
            ),
            array(
                'company' => 'Fidelis Technology Services Pvt. Ltd.',
                'city' => 'Delhi/ NCR',
                'address' => 'Unitech Cyber Park, Tower- B, 10th Floor, Unitech Cyber Park, Sector 39, Gurugram, Haryana-12200, INDIA'
            ),
            array(
                'company' => 'Fidelis Group, INC,',
                'city' => 'United States',
                'address' => '2609 Crooks Road #216,Troy, Michigan State, USA 48084',
                'email' => 'info-usa@fidelisgroup.in'
            ),
            array(
                'company' => 'Fidelis Technologies Pte Ltd',
                'city' => 'Singapore APAC',
                'address' => '111 Somerset Road, #08-10A, 111 Somerset, Singapore, 238164, Singapore',
                'email' => 'info-sg@fidelisgroup.in'
            ),
            array(  
                'company' => 'Fidelis Technologies',
                'city' => 'Dubai',
                'address' => 'Office 08 J-0118, Warehouse -P1, Block J, Saih Shuaib 2, Dubai, UAE',
                'email' => 'info-uae@fidelisgroup.in'
            )
        );

        return view('pages.contact-us', compact('locations'));
    }

    public function careers(){
        return view('pages.careers');
    }

    public function careerdetails(Request $request){
        return view('pages.career-detail');
    }

    public function refer_candidate(){
        return view('pages.career-refer-candidate');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function noc(){
        return view('pages.fidelis-noc');
    }

    public function soc(){
        return view('pages.fidelis-soc');
    }

    public function ams(){
        return view('pages.fidelis-ams');
    }

    public function life_Culture_fidelis(){
        return view('pages.life-at-fidelis');
        // return view('jobslanding');
    }

    public function industries(){
        return view('pages.industries');
    }

    public function robotic_process_automation(){
        return view('pages.robotic-process-automation');
    }

    public function business_process_management_automation(){
        return view('pages.business-process-management-automation');
    }

    public function business_intelligence_analytical_services(){
        return view('pages.business-intelligence-analytical-services');
    }

    public function database_storage_admin(){
        return view('pages.database-storage-admin');
    }

    public function application_development(){
        return view('pages.application-development');
    }

    public function erp_application_development_services(){
        return view('pages.erp-application-development-services');
    }

    public function application_management(){
        return view('pages.application-management');
    }

    public function application_validation(){
        return view('pages.application-qa-validation');
    }

    public function devops_advisory(){
        return view('pages.devops-advisory');
    }

    public function cloud_computing(){
        return view('pages.cloud-computing');
    }

    public function it_infra_management(){
        return view('pages.it-infra-management');
    }

    public function data_center_enablement(){
        return view('pages.data-center-enablement');
    }

    public function managed_services(){
        return view('pages.managed-services');
    }

    public function contingent_staffing(){
        return view('pages.contingent-staffing');
    }

    public function msp_parternship(){
        return view('pages.msp-parternship');
    }

    public function short_term_engagement(){
        return view('pages.short-term-engagement');        
    }

    public function talent_kloud(){
        return view('pages.talent-kloud');
    }

    public function compliance(){
        return view('pages.compliance');
    }

    public function learning_academy(){
        return view('pages.learning-academy');
    }

    public function free_demo(){
        return view('pages.free-demo');
    }

    public function solution_processor(){
        $url = str_replace('-', ' ', \Request::route()->getName());
        $solutions = soltions::where('name', $url)->get();
        return view('pages.solutions', compact('solutions'));
    }
}
