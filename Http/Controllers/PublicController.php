<?php namespace Modules\Contact\Http\Controllers;

use Mail;

use Illuminate\Contracts\Foundation\Application;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Core\Contracts\Authentication;

use Modules\Contact\Repositories\ContactRepository;
use Modules\Page\Entities\Contact;

use Modules\Contact\Http\Requests\ContactRequest;
use Illuminate\Contracts\Validation\Validator;

class PublicController extends BasePublicController
{
	  /**
     * @var PageRepository
     */
    private $contact;
    /**
     * @var Application
     */
    private $app;

    public function __construct(ContactRepository $contact, Application $app)
    {
        parent::__construct();
        $this->contact = $contact;
        $this->app = $app;
    }

    public function sendAjax(ContactRequest $request){

    	$input = $request->all();
    	$input['status'] = 1;
        $contact= $this->contact->create($input);

        Mail::send('emails.contact', ['contact' => $contact], function ($m){
            $m->to(env('EMAIL_DEFAULT_FROM_ADDRESS'), env('EMAIL_DEFAULT_FROM_NAME'))->subject('Formularz kontaktowy - hcka.pl');
        });

    }

    public function send( ContactRequest $request){

    }

}