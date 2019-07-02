<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
trait SendMail{
	public $to;
	public $subject;
	public $message;
	public $name;
	public $file;
	public $mobile;
	public $email;
	public function __construct(){
		$this->subject="";
		$this->to="";
		$this->email="";
		$this->name="";
		$this->file="";
		$this->mobile="";
		$this->message="";
	}

	
	public function sendHtmlMail($data)
	{
		$this->to=$data['email'];
		$this->name=$data['name'];
		$this->email=$data['email'];
		$this->designation=$data['designation'];
		$this->company=$data['enquiry_company'];
		$this->country=$data['country'];
		$this->description=$data['description'];
		$this->report_title=$data['report_title'];
		$this->report_pages=$data['report_pages'];
		$this->mobile=$data['mobile'];
		$this->source=$data['source'];
		$this->ip=$data['ip'];
		$this->url=$data['url'];
		$this->email=[$this->to];

		if(!$this->source!="Sample_Report"){
			Mail::send("mail/sampleMail",$data,function($message) {
				$message->to($this->email, $this->name)->subject
				("Request Sample: ".$this->report_title);

				$message->from('sales@reportsmonitor.com',"Garner Insights");
			});
			Mail::send("mail/adminMail",$data,function($message){
				$message->to('sales@reportsmonitor.com',$this->name)->subject("Request Sample: Report Name".$this->report_title);
				/*$message->to('ketki@jmtit.com',$this->name)->subject("Request Sample: Report Name".$this->report_title);*/
				$message->from('sales@reportsmonitor.com',"Garner Insights");
			});
		}
		else{
			
			Mail::send("mail/discountMail",$data,function($message) {
				$message->to($this->email, $this->name)->subject
				("Discount Enquiry :".$this->report_title);

				$message->from('sales@reportsmonitor.com',"Garner Insights");
			});
			Mail::send("mail/adminMail",$data,function($message){
				$message->to('sales@reportsmonitor.com',$this->name)->subject("Discount Enquiry: ".$this->report_title);
				$message->from('sales@reportsmonitor.com',"Garner Insights");
			});
		}
		
	}

	public function sendHtmlMail1($data){
		$this->to=$data['email'];
		$this->name=$data['name'];
		$this->email=$data['email'];
		$this->mobile=$data['mobile'];
		$this->report=$data['report'];
		$this->source=$data['source'];
		$this->report_url=$data['report_url'];
		$this->ip=$data['ip'];
		$this->email=[$this->to];
		Mail::send("mail/enquiryMail",$data,function($message) {
			$message->to($this->email, $this->name)->subject
			("Enquiry: ".$this->report);
			$message->from('sales@reportsmonitor.com',"Garner Insights");
		});
		Mail::send("mail/adminEnquiryMail",$data,function($message) {
			$message->to("sales@reportsmonitor.com", $this->name)->subject
			("Report Enquiry: ".$this->report);
			/*$message->to("ketki@jmtit.com", $this->name)->subject
			("Report Enquiry: ".$this->report);*/
			$message->from('sales@reportsmonitor.com',"Garner Insights");
		});
		
	}

	public function sendHtmlMail2($data){
		$this->to=$data['email'];
		$this->name=$data['name'];
		$this->email=$data['email'];
		$this->mobile=$data['mobile'];
		$this->city=$data['city'];
		$this->message=$data['text'];
		$this->subject=$data['subject'];
		$this->ip=$data['ip'];
		$this->email=[$this->to];
		Mail::send("mail/contactMail",$data,function($message) {
			$message->to($this->email, $this->name)->subject
			("Contact");
			$message->from('sales@reportsmonitor.com',$this->name);
		});
		Mail::send("mail/adminContactMail",$data,function($message) {
			$message->to("sales@reportsmonitor.com", $this->name)->subject
			("Contact Enquiry Garner Insights");
			$message->from('sales@reportsmonitor.com',$this->name);
		});
		
	}
	

	public function sendHtmlMail3($data){
		$this->to=$data['email'];
		$this->name=$data['name'];
		$this->email=$data['email'];
		$this->mobile=$data['mobile'];
		$this->message=$data['text'];
		$this->ip=$data['ip'];
		$this->email=[$this->to];
		Mail::send("mail/quoteMail",$data,function($message) {
			$message->to($this->email, $this->name)->subject
			("quote");
			$message->from('sales@reportsmonitor.com',$this->name);
		});
		Mail::send("mail/adminQuoteMail",$data,function($message) {
			$message->to("sales@reportsmonitor.com", $this->name)->subject
			("Contact Enquiry");
			/*$message->to("ketki@jmtit.com", $this->name)->subject
			("Quote Enquiry");*/
			$message->from('sales@reportsmonitor.com',$this->name);
		});
		
	}

	public function sendHtmlMail4($data){
		$this->to=$data['email'];
		$this->first_name=$data['first_name'];
		$this->email=$data['email'];
		$this->designation=$data['designation'];
		$this->address=$data['address'];
		$this->zip=$data['zip'];
		$this->last_name=$data['last_name'];
		$this->phone_no=$data['phone_no'];
		$this->company=$data['company'];
		$this->city=$data['city'];
		$this->source=$data['source'];
		$this->state=$data['state'];
		$this->country=$data['country'];
		$this->url=$data['url'];
		$this->ip=$data['ip'];
		$this->report_id=$data['report_id'];
		$this->report_title=$data['report_title'];
		$this->amount=$data['amount'];
		$this->pre=$data['pre'];
		$this->email=[$this->to];

		if(!$this->source!="payapl"){

			Mail::send("mail/adminPaymentMail",$data,function($message){
				$message->to('sales@reportsmonitor.com',$this->first_name)->subject("Paypal form submit by user: Report Name ".$this->report_title);
				/*$message->to('ketki@jmtit.com',$this->first_name)->subject("Paypal form submit by user: Report Name ".$this->report_title);*/
				$message->from('sales@reportsmonitor.com',"Garner Insights");
			});
		}
		else{
			
			Mail::send("mail/adminPaymentMail",$data,function($message){
				$message->to('sales@reportsmonitor.com',$this->first_name)->subject("Wire transfer form submitted by user: ".$this->report_title);
				/*$message->to('ketki@jmtit.com',$this->first_name)->subject("Wire transfer from submitted by user: ".$this->report_title);*/
				$message->from('sales@reportsmonitor.com',"Garner Insights");
			});
		}
		
	}

	public function sendAttachmentMail(){
		$data = array('name'=>"Virat Gandhi");
		Mail::send('mail', $data, function($message) {
			$message->to('abhijit_shete@jmtit.com', 'Web')->subject
			('Laravel Testing Mail with Attachment');
			$message->attach('http://go4nandedcity.jmtit.co.in/portal/images/login-background.jpg');
			$message->from('demo@jmtit.co.in','Virat Gandhi');
		});

		echo "Email Sent with attachment. Check your inbox.";
	}
}
