<?php
/**
 *  * This is project'sonsoleommandsonfiguration for Robo task runner.
 *   *
 *    * @see http://robo.li/
 *     */
class RoboFile extends \Robo\Tasks
{

        public function build()
        {

                $allCSS = 'css/dist/all.css';
                $minifiedCSS = 'css/dist/all.min.css';

                $alljs = 'js/dist/all.js';
                $minifiedjs = 'js/dist/all.min.js';

                $this->taskConcat(['css/sample.css','css/two.css'])
                        ->to($allCSS)
                        ->run();

                $this->taskMinify($allCSS)
                        ->to($minifiedCSS)
                        ->run();

                $this->taskConcat(['js/jquery-3.1.1.min.js','js/task.js'])
                        ->to($alljs)
                        ->run();

                $this->taskMinify($alljs)
                        ->to($minifiedjs)
                        ->run();
        }

}
?>
