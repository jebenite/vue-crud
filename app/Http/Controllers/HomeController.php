<?php

namespace App\Http\Controllers;
use KzykHys\Parallel\Parallel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $parallel = new Parallel();
      $parallel->run([
      function () {
          echo "task#1 start\n";
          sleep(2);
          echo "task#1 end\n";
      },
      function () {
          echo "task#2 start\n";
          sleep(3);
          echo "task#2 end\n";
      }
      ]);

      echo "Done\n";
    }
}
