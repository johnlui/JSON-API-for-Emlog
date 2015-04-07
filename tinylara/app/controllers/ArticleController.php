<?php
/**
* \ArticleController
*/
class ArticleController extends BaseController {

  public function fromAToB($params)
  {
    $response = ['status'=>'success'];
    $nums = explode(',', $params);
    if ( $nums[1] <= $nums[0] ) {
      $response['status'] = 'Invalid Argument';
      return json_encode($response);
    }
    return json_encode( Article::offset($nums[0])->take($nums[1] - $nums[0])->get() );
  }
  public function show($id)
  {
    return json_encode( Article::find($id) );
  }
}