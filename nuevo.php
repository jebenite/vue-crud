<?php

class ChildThread extends Thread {
            public $data;

            public function run() {
                /* Do some expensive work */
                $this->data = 'result of expensive work';
            }
          }

          $thread = new ChildThread();

          if ($thread->start()) {

            $thread->join();

              echo "Waiting for current jobs to finish... \n"; 
          }