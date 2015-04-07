<?php
/**
* \UserController
*/
class UserController extends BaseController {

  public function userInfo()
  {
    $blogURL = Option::where('option_name', 'blogurl')->first()->option_value;
    $response = User::where('role', 'admin')->first(['nickname', 'photo', 'email', 'description']);
    $response->photo = $blogURL.substr($response->photo, 3);
    return json_encode($response);
  }
}