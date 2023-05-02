<?php

namespace App\Http\Controllers;

use App\Jobs\MyJob;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Inline\Element\Strong;
use App\Events\PersonEvent;
use App\MyClasses\PowerMyService;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;
use GuzzleHttp\Client;


class HelloController extends Controller
{

  public function index()
  {
    $data =[
      'title'=> 'Title',
      'content' => 'content',
      'date' => '2024-03-03'
    ];

    return view('hello.index', ['data'=>$data]);

  }

  public function json($id = -1)
  {
    if ($id == -1)
    {
      return Person::get()->toJson();
    }
    else
    {
      return Person::find($id)->toJson();
    }
  }

  public function send(Request $request)
  {
    $id = $request->input('id');

    $person =Person::find($id);


    event(new PersonEvent($person));
    $data = [
      'input' => '',
      'msg' => 'id=' . $id,
      'data' => [$person],
    ];

    return view('hello.index', $data);
  }

  public function save($id, $name)
  {
    $record = Person::find($id);
    $record->name = $name;
    $record->save();
    return redirect()->route('hello');
  }

  public function other()
  {
    $person = new Person();
    $person->all_data = ['aaaa','bbb@ccc', 1223];
    $person->save();

    return redirect()->route('hello');
  }

  public function clear()
  {
    Artisan::call('cache:clear');
    Artisan::call('event:clear');
    return redirect()->route('hello');
  }

}
