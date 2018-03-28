<?php $nav_profile = ''; ?>
<?php $nav_home = 'active'; ?>
@extends('layout.master')

@section('header')
  <h1>HOME</h1>
@endsection
@section('content')
<div >
  <h1>Jumbotron</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a class="btn btn-primary btn-lg">Learn more</a></p>
  </div>
  <h2>Emphasis classes</h2>
<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<!-- vue-app must same the word "el in app.js" -->
<div id="vue-app">
  <p>v of VueJS</p>



  <div class="">
    <example-component heading="1" text="Sending text"></example-component>
      <example-component v-bind:heading="number"  text="noel"></example-component>
    <p>Item: <input v-model.time="item" type="text" name="" value=""></p>
    <br>
    <!-- @click="appendItem" or v-on:click="appendItem" -->
    <button @click="appendItem" class="bn btn-xs btn-success" type="button" name="button">Add item</button>
    <ul class="list-group">
      <!-- <li v-for="todo in todos"></li>  -->
      <li v-for="todo of todos" class="list-group-item">
        <!-- this one  -->
      <example-component
      heading="Item"
      v-bind:text="todo">
      </example-component>
      <!-- or  -->
      <!-- @{{todo}} -->
      </li>
    </ul>
  </div>
  <div class="">
    Time: <input type="text" v-model="seconds" name="" value="">s <br>
    Hour :@{{hourText}} <br>
    Minutes: @{{minuteText}} <br>
    Seconds: @{{secondText}} <br>
  </div>
  <div v-if="isShowTimeButton">
    <button type="button" name="button"class="btn btn-primary" @click="decreaseTime">-1 second</button>
    <button type="button" name="button" class="btn btn-primary" v-on:click="increaseTime">+1 second</button>
  </div>
  <span class="btn btn-primary" v-on:click="toggleTimeButton">Toggle Button</span>
  <p>Number: @{{number}}</p>
  <p>Text: @{{text}}</p>


  <div class="">
    <button type="button" class="btn btn-primary" name="button" v-on:click="increaseNumber">
      Click
    </button>
  </div>
</div>
@endsection
