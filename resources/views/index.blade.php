@extends('layouts.app')
    @section('content')
       <header>
           <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;" class="hidden-xs">
               <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                   <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="node_modules\jssor-slider\svg\loading\static-svg\oval.svg" />
               </div>
               <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
                   <div>
                       <img data-u="image" src="images/android.jpg" />
                   </div>
                   <div>
                       <img data-u="image" src="images/windows.jpg" />
                   </div>
                   <div>
                       <img data-u="image" src="images/mac.jpg" />
                   </div>
               </div>
               <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                   <div data-u="prototype" class="i" style="width:20px;height:20px;">
                       <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                           <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                       </svg>
                   </div>
               </div>
               <div data-u="arrowleft" class="jssora051" style="width:75px;height:75px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
               </div>
               <div data-u="arrowright" class="jssora051" style="width:75px;height:75px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
               </div>
           </div>

       </header>
    @endsection