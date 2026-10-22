<template>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <router-link class="navbar-brand main-logo" to="/">Jonathan <span class="red">Torres</span></router-link>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li>
          <router-link to="/resume">Resume</router-link>
          <div class="marker">
            <div class="prog"></div>
          </div>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</template>
