<?php
namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
  /**
   * @param Request $request
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index(Request $request)
  {
    $sample_msg =config('sample.message');
    $sample_data = config('sample.data');
    $data = [
      'msg'=>$sample_msg,
      'data'=>$sample_data
    ];
    return view('hello.index', $data);
  }

  /**
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function other(Request $request)
  {
    $data = [
      'msg'=>'Sample-Controller-Other',
    ];
    return redirect('/hello');
//    return view('hello.index',$data);
  }
}
