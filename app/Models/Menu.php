<?php
/*
+--------+----------+-------------------------------------------------------------------------+------+---------+------------+
| Domain | Method   | URI                                                                     | Name | Action  | Middleware |
+--------+----------+-------------------------------------------------------------------------+------+---------+------------+
|        | GET|HEAD | /                                                                       |      | Closure | web        |
|        | GET|HEAD | 1                                                                       |      | Closure | web        |
|        | GET|HEAD | 2                                                                       |      | Closure | web        |
|        | GET|HEAD | about                                                                   |      | Closure | web        |
|        | GET|HEAD | affiliate                                                               |      | Closure | web        |
|        | GET|HEAD | api/user                                                                |      | Closure | api        |
|        |          |                                                                         |      |         | auth:api   |
|        | GET|HEAD | business-closure/closing-a-limited-liability-partnership                |      | Closure | web        |
|        | GET|HEAD | business-closure/revival-of-struck-off-companies                        |      | Closure | web        |
|        | GET|HEAD | business-closure/winding-private-limited-company                        |      | Closure | web        |
|        | GET|HEAD | business-conversion/conversion-of-llp-to-private-company                |      | Closure | web        |
|        | GET|HEAD | business-conversion/conversion-of-pvt-ltd-to-public-limited             |      | Closure | web        |
|        | GET|HEAD | business-conversion/sole-proprietorship-to-pvt-ltd-company              |      | Closure | web        |
|        | GET|HEAD | business-conversionpartnership-firm-into-pvt-ltd-company                |      | Closure | web        |
|        | GET|HEAD | business-registrations/indian-subsidiary-company-registration           |      | Closure | web        |
|        | GET|HEAD | business-registrations/limited-liability-partnership                    |      | Closure | web        |
|        | GET|HEAD | business-registrations/nidhi-company-registration                       |      | Closure | web        |
|        | GET|HEAD | business-registrations/one-person-company                               |      | Closure | web        |
|        | GET|HEAD | business-registrations/partnership-firm-registration                    |      | Closure | web        |
|        | GET|HEAD | business-registrations/private-limited-company-registration             |      | Closure | web        |
|        | GET|HEAD | business-registrations/producer-company-registration                    |      | Closure | web        |
|        | GET|HEAD | business-registrations/public-limited-company-registration              |      | Closure | web        |
|        | GET|HEAD | business-registrations/sole-proprietorship-registration                 |      | Closure | web        |
|        | GET|HEAD | contact-us                                                              |      | Closure | web        |
|        | GET|HEAD | event-based-secretarial-events/appointment-and-resignation-of-directors |      | Closure | web        |
|        | GET|HEAD | event-based-secretarial-events/change-in-name-clause                    |      | Closure | web        |
|        | GET|HEAD | event-based-secretarial-events/change-in-object-clause                  |      | Closure | web        |
|        | GET|HEAD | event-based-secretarial-events/event-based-compliances-in-a-company     |      | Closure | web        |
|        | GET|HEAD | fssai-eating-license/central-fssai-license                              |      | Closure | web        |
|        | GET|HEAD | fssai-eating-license/eating-house-license                               |      | Closure | web        |
|        | GET|HEAD | fssai-eating-license/fssai-annual-return                                |      | Closure | web        |
|        | GET|HEAD | fssai-eating-license/fssai-license                                      |      | Closure | web        |
|        | GET|HEAD | fssai-eating-license/fssai-license-renewal                              |      | Closure | web        |
|        | GET|HEAD | fssai-eating-license/fssai-state-license                                |      | Closure | web        |
|        | GET|HEAD | government-licenses/ayush-license                                       |      | Closure | web        |
|        | GET|HEAD | government-licenses/drug-license                                        |      | Closure | web        |
|        | GET|HEAD | government-licenses/health-trade-license                                |      | Closure | web        |
|        | GET|HEAD | government-licenses/iso-registration                                    |      | Closure | web        |
|        | GET|HEAD | government-licenses/manufacturing-drug-license                          |      | Closure | web        |
|        | GET|HEAD | government-licenses/psara-license                                       |      | Closure | web        |
|        | GET|HEAD | government-licenses/retail-drug-license                                 |      | Closure | web        |
|        | GET|HEAD | government-licenses/trade-license                                       |      | Closure | web        |
|        | GET|HEAD | government-licenses/wholesale-drug-license                              |      | Closure | web        |
|        | GET|HEAD | government-registration/apeda-registration                              |      | Closure | web        |
|        | GET|HEAD | government-registration/building-noc                                    |      | Closure | web        |
|        | GET|HEAD | government-registration/delhi-pollution-control-committee               |      | Closure | web        |
|        | GET|HEAD | government-registration/fire-department-noc                             |      | Closure | web        |
|        | GET|HEAD | government-registration/noc-pollution-control-board                     |      | Closure | web        |
|        | GET|HEAD | government-registration/rera-registration                               |      | Closure | web        |
|        | GET|HEAD | government-registration/rera-registration-for-agents                    |      | Closure | web        |
|        | GET|HEAD | government-registration/rera-registration-for-promoters                 |      | Closure | web        |
|        | GET|HEAD | government-registration/uttar-pradesh-pollution-control-board           |      | Closure | web        |
|        | GET|HEAD | home                                                                    |      | Closure | web        |
|        | GET|HEAD | secretarial-events/annual-compliance-of-a-pvt-ltd-company               |      | Closure | web        |
|        | GET|HEAD | secretarial-events/annual-filing-for-llp                                |      | Closure | web        |
|        | GET|HEAD | secretarial-events/secretarial-secretarial-events                       |      | Closure | web        |
|        | GET|HEAD | secretarial-events/section-8-company-compliance                         |      | Closure | web        |
|        | GET|HEAD | secretarial-secretarial-events/nidhi-company-compliance                 |      | Closure | web        |
|        | GET|HEAD | sign-in                                                                 |      | Closure | web        |
|        | GET|HEAD | sign-up                                                                 |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/copyright-disclaimer                                      |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/trademark-classes-finder                                  |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/trademark-objection                                       |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/trademark-rectification                                   |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/trademark-registration                                    |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/trademark-renewal                                         |      | Closure | web        |
|        | GET|HEAD | trademark-ipr/trademark-search                                          |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/12aa-registration                                         |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/80g-and-12a-registration                                  |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/fcra-registration                                         |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/ngo-registration                                          |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/section-8-company-registration                            |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/society-registration                                      |      | Closure | web        |
|        | GET|HEAD | trademark-ngo/trust-registration                                        |      | Closure | web        |
+--------+----------+-------------------------------------------------------------------------+------+---------+------------+


*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;



    /*
	<?php  $menus =  \App\Models\Menu::list();
		$menus->home->name 
			 o/p - Home
		$menus->home->name 
			o/p - http://localhost/corpexadvisors/
		$menus->home 
			 o/p - array()
	 ? >
    */
    public static function list($parent = ''){

    	$MENU['home'] 		= [ 'url'=> url('/') , 'name' => 'Home'  ];
    	$MENU['about_us'] 	= [ 'url'=> url('/about-us'), 'name '=>'About Us'  ];
    	$MENU['affiliate']	= [ 'url'=> url('/') , 'name'=> 'Affiliate'  ];
    	$MENU['contact_us']	= [ 'url'=> url('/') , 'name'=> 'Contact Us'  ];
    	$MENU['sign_in'] 	= [ 'url'=> url('/sign-in') , 'name'=> 'Sign In'  ];
    	$MENU['sign_up'] 	= [ 'url'=> url('/sign-up') , 'name'=> 'Sign Up'  ];



    	$MENU['business_registrations'] = array(
    		"private_limited_company_registration" => array( 
    					'url' => url('/business-registrations/private-limited-company-registration') ,
    					'name' => 'Private Limited Company Rregistration' 
    				),
			"public_limited_company_registration" => array( 
    					'url' => url('/business-registrations/public-limited-company-registration'),
    					'name' => 'Public Limited Company Registration'
    				),
			"one_person_company" =>  array( 
    					'url' => url('/business-registrations/one-person-company') ,
    					'name' => 'One Person Company' 
    				),

			"nidhi_company_registration" =>  array( 
    					'url' => url('business-registrations/nidhi-company-registration'),
    					'name' => 'Nidhi Company Registration' 
    				),

			"producer_company_registration" => array( 
    					'url' => 	url('/business-registrations/producer-company-registration'),
    					'name'=> 'Producer Company Registration' 
    				),

			"indian_subsidiary_company_registration" =>  array( 
    					'url' => url('/business-registrations/indian-subsidiary-company-registration') ,
    					'name'=> 'Indian Subsidiary Company Registration' 
    				),

			"limited_liability_partnership" => array( 
    					'url' => url('/business-registrations/limited-liability-partnership'),
    					'name'=> 'Limited Liability Partnership' 
    				),

			"partnership_firm_registration" =>  array( 
    					'url' => 	url('/business-registrations/partnership-firm-registration'),
    					'name'=> 'Partnership Firm Registration' 
    				),

			"sole_proprietorship_registration" =>  array( 
    					'url' => 	url('/business-registrations/sole-proprietorship-registration ') ,
    					'name' => 'Sole Proprietorship Registration' 
    				),
    	);

    	$MENU['fssai_and_eating_license'] = array( 

				"fssai_license" => array( 
	    				'url' => url('/fssai-eating-license/fssai-license'),
    					'name'=> 'Fssai License' 
	    				),
				"fssai_state_license" => array( 
	    				'url' => url('/fssai-eating-license/fssai-state-license'),
    					'name'=> 'Fssai State License' 
	    				),
				"central_fssai_license" => array( 
	    				'url' => url('/fssai-eating-license/central-fssai-license'),
    					'name'=> 'Central Fssai License' 
	    				),
				"fssai_annual_return" => array( 
	    				'url' => url('/fssai-eating-license/fssai-annual-return'),
    					'name'=> 'Fssai Annual Return' 
	    				),
				"fssai_license_renewal" => array( 
	    				'url' => url('/fssai-eating-license/fssai-license-renewal'),
    					'name'=> 'Fssai License Renewal' 
	    				),
				"eating_house_license" => array( 
	    				'url' => url('/fssai-eating-license/eating-house-license'),
    					'name' => 'Eating House License' 
	    				),
    	);

    	$MENU['government_licenses'] = array(        

				"psara_license" => array( 
	    				'url' => url('/government-licenses/ayush-license'),
    					'name' => 'Ayush License' 
	    				),

				"drug_license" =>  array( 
	    				'url' => url('/government-licenses/drug-license'),
    					'name' => 'Drug License' 
	    				),

				"ayush_license" =>  array( 
	    				'url' => url('/drug-license/psara-license'),
    					'name' => 'Psara License' 
	    				),

				"manufacturing_drug_license" =>  array( 
	    				'url' => url('/government-licenses/manufacturing-drug-license'),
    					'name' => 'Manufacturing Drug License' 
	    				),

				"retail_drug_license" =>  array( 
	    				'url' => url('/government-licenses/retail-drug-license'),
    					'name' => 'Retail Drug License' 
	    				),

				"wholesale_drug_license" => array( 
	    				'url' => url('/government-licenses/wholesale-drug-license'),
    					'name' => 'Wholesale Drug License' 
	    				),

				"trade_license" =>  array( 
	    				'url' => url('/government-licenses/trade-license'),
    					'name' => 'Trade License' 
	    				),

				"health_trade_license" =>  array( 
	    				'url' => url('/government-licenses/health-trade-license'),
    					'name' => 'Health Trade License' 
	    				),

				"iso_registration" =>  array( 
	    				'url' => url('/government-licenses/iso-registration'),
    					'name' => 'ISO Registration' 
	    				),

    	);

    	$MENU['government_registrations'] = array( 

    		"apeda_registration" =>  array( 
	    				'url' => url('/government-registration/apeda-registration'),
    					'name' => 'Apeda Registration' 
	    				),

			"rera_registration" =>  array( 
	    				'url' => url('/government-registration/rera-registration'),
    					'name' => 'Rera Registration' 
	    				),

			"rera_registration_for_agents" => array( 
	    				'url' => url('/government-registration/rera-registration-for-agents'),
    					'name' => 'Rera Registration for Agents' 
	    				),

			"rera_registration_for_promoters" =>  array( 
	    				'url' => url('/government-registration/rera-registration-for-promoters'),
    					'name' => 'Rera Registration For Promoters' 
	    				),

			"noc_pollution_control_board" =>  array( 
	    				'url' => url('/government-registration/noc-pollution-control-board'),
    					'name' => 'NOC Pollution Control Board' 
	    				),

			"fire_department_noc" =>  array( 
	    				'url' => url('/government-registration/fire-department-noc'),
    					'name' => 'Fire Department NOC' 
	    				),

			"building_noc" =>  array( 
	    				'url' => url('/government-registration/building-noc'),
    					'name' => 'Building NOC' 
	    				),

			"delhi_pollution_control_committee" =>  array( 
	    				'url' => url('/government-registration/delhi-pollution-control-committee'),
    					'name' => 'Delhi Pollution Control Committee' 
	    				),

			"uttar_pradesh_pollution_control_board" =>  array( 
	    				'url' => url('/government-registration/uttar-pradesh-pollution-control-board'),
    					'name' => 'Uttar Pradesh Pollution Control Board' 
	    				),
    	);

    	$MENU['ipr'] = array(   
         
    			"trademark_registration" =>array( 
	    				'url' => url('/trademark-ipr/trademark-registration'),
    					'name' => 'Trademark Registration' 
	    				),
				"trademark_classes_finder" =>array( 
	    				'url' => url('/trademark-ipr/trademark-classes-finder'),
    					'name' => 'Trademark Classes Finder' 
	    				),
				"trademark_renewal" =>array( 
	    				'url' => url('/trademark-ipr/trademark-renewal'),
    					'name' => 'Trademark Renewal' 
	    				),
				"trademark_search" =>array( 
	    				'url' => url('/trademark-ipr/trademark-search'),
    					'name' => 'Trademark Search' 
	    				),
				"copyright_disclaimer" =>array( 
	    				'url' => url('/trademark-ipr/copyright-disclaimer'),
    					'name' => 'Copyright Disclaimer' 
	    				),
				"trademark_objection" =>array( 
	    				'url' => url('/trademark-ipr/trademark-objection'),
    					'name' => 'Trademark Objection' 
	    				),
				"trademark_rectification" =>array( 
	    				'url' => url('/trademark-ipr/trademark-rectification'),
    					'name' => 'Trademark Rectification' 
	    				),
    	);
                               
                           
                                     
 
    	$MENU['ngo'] = array(
    		"ngo_registration" =>array( 
	    				'url' => url('/trademark-ngo/ngo-registration'),
    					'name' => 'NGO Registration' 
	    				),
			"trust_registration" =>array( 
	    				'url' => url('/trademark-ngo/trust-registration'),
    					'name' => 'Trust Registration' 
	    				),
			"society_registration" =>array( 
	    				'url' => url('/trademark-ngo/society-registration'),
    					'name' => 'Society Registration' 
	    				),
			"section_8_company_registration" =>array( 
	    				'url' => url('/trademark-ngo/section-8-company-registration'),
    					'name' => 'Section 8 Company Registration' 
	    				),
			"fcra_registration" =>array( 
	    				'url' => url('/trademark-ngo/fcra-registration'),
    					'name' => 'Fcra Registration' 
	    				),
			"80g_and_12a_registration" =>array( 
	    				'url' => url('/trademark-ngo/80g-and-12a-registration'),
    					'name' => '80g And 12a Registration' 
	    				),
			"12aa_registration" =>array( 
	    				'url' => url('/trademark-ngo/12aa-registration'),
    					'name' => '12aa Registration' 
	    				),
			
    	);

    	$MENU['business_conversion'] = array( 
 
    		"sole_proprietorship_to_pvt_ltd_company" =>array( 
	    				'url' => url('/business-conversion/sole-proprietorship-to-pvt-ltd-company'),
    					'name' => 'Sole Proprietorship to Pvt Ltd Company' 
	    				),
			"conversion_of_pvt_ltd_to_public_limited" =>array( 
	    				'url' => url('/business-conversion/conversion-of-pvt-ltd-to-public-limited'),
    					'name' => 'conversion of pvt Ltd to Public Limited' 
	    				),
			"conversion_of_llp_to_private_company" =>array( 
	    				'url' => url('/business-conversion/conversion-of-llp-to-private-company'),
    					'name' => 'Conversion of LLP to Private Company' 
	    				),
			"partnership_firm_into_pvt_ltd_company" =>array( 
	    				'url' => url('/business-conversion/partnership-firm-into-pvt-ltd-company'),
    					'name' => 'Partnership Firm Into Pvt Ltd Company' 
	    				),			
    	);



    	$MENU['business_closure'] = array( 

    		"winding_private_limited_company" =>array( 
	    				'url' => url('/business-closure/winding-private-limited-company'),
    					'name' => 'Winding Private Limited Company' 
	    				),
			"closing_a_limited_liability_partnership" =>array( 
	    				'url' => url('/business-closure/closing-a-limited-liability-partnership'),
    					'name' => 'Closing a Limited Liability Partnership' 
	    				),
			"revival_of_struck_off_companies" =>array( 
	    				'url' => url('/business-closure/revival-of-struck-off-companies'),
    					'name' => 'Revival of Struck off Companies' 
	    				),
			
    	); 

    	$MENU['secretarial_secretarial_and_events'] = array(
			"annual_compliance_of_a_pvt_ltd_company" =>array( 
	    				'url' => url('/secretarial-events/annual-compliance-of-a-pvt-ltd-company'),
    					'name' => 'Annual Compliance of a Pvt Ltd Company' 
	    				),
			"annual_filing_for_llp" =>array( 
	    				'url' => url('/secretarial-events/annual-filing-for-llp'),
    					'name' => 'Annual Filing for LLP' 
	    				),
			"nidhi_company_compliance" =>array( 
	    				'url' => url('/secretarial-secretarial-events/nidhi-company-compliance'),
    					'name' => 'Nidhi Company Compliance' 
	    				),
			"section_8_company_compliance" =>array( 
	    				'url' => url('/secretarial-events/section-8-company-compliance'),
    					'name' => 'Section 8 Company Compliance' 
	    				),
			
    	);


    	$MENU['event_based_secretarial_and_events'] = array( 

			"event_based_compliances_in_a_company" =>array( 
	    				'url' => url('/event-based-secretarial-events/event-based-compliances-in-a-company'),
    					'name' => 'Event Based Compliances In A Company' 
	    				),
			"change_in_object_clause" =>array( 
	    				'url' => url('event-based-secretarial-events/change-in-object-clause'),
    					'name' => 'Change In Object Clause' 
	    				),
			"appointment_and_resignation_of_directors" =>array( 
	    				'url' => url('/event-based-secretarial-events/appointment-and-resignation-of-directors'),
    					'name' => 'Appointment And Resignation of Directors' 
	    				),
			"change_in_name_clause" =>array( 
	    				'url' => url('/event-based-secretarial-events/change-in-name-clause'),
    					'name' => 'Change In Name Clause' 
	    				),
			
    	);  
    	
    	if($parent != ''){
    		if($MENU[$parent]){
    			$DATA = $MENU[$parent];
    		}else{
    			$DATA = array();
    		}
    	}else{
    		$DATA = $MENU;
    	}
    	
    	$json =  json_encode($DATA);
    	return json_decode($json);

    }

   

}
