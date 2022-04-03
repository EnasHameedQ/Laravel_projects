<?php 


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerView extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function viewWEB($v, $params)
    {

        require_once __DIR__ . "/../views/web/$v.php";
    }
  public function viewDash($v, $params)
  {

    require_once __DIR__ . "/../views/dashboard/$v.php";
  }


  public function show_home()
  {
    return viewWEB('index');
  }
  public function show_about()
  {
    return viewWEB('about_us');
  }

  public function show_contact()
  {
    return viewWEB('contuct_us');
  }
  public function show_jobs()
  {
    return viewWEB('jops');
  }
  public function show_details()
  {
    return viewWEB('jops_detaiels');
  }
  public function show_our_parteners()
  {
    return viewWEB('our_parteners');
  }

  public function show_our_serveces()
  {
    return viewWEB('our_serveces');
  }
  public function show_login()
  {
    return viewWEB('login');
  }
  public function show_register()
  {
    return viewWEB('register');
  }

  }
  ?>