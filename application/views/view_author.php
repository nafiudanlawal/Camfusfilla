<div class="content" style="height: 200px; margin: 200px">
  <link rel="stylesheet" type="text/css" href="../components/bootstrap/dist/css/bootstrap-theme.min.css"></link>
<link rel="stylesheet" type="text/css" href="../dist/bootstrap3-wysihtml5.min.css"></link>

<style type="text/css" media="screen">
  .btn.jumbo {
    font-size: 20px;
    font-weight: normal;
    padding: 14px 24px;
    margin-right: 10px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
  }
  div.textarea {
    width: 100%; 
    font-size: 14px; 
    line-height: 18px;
    background-color: white;
    min-height: 200px;
  }
  div.textarea.fixed {
    overflow-y: scroll;
    height: 200px; 
  }
</style>

</head>
<body>
<div class="container">
  <div class="jumbotron" style="margin-top:40px">
    <h1 style="font-size:58px">bootstrap-wysihtml5 <br/><small>Simple, beautiful wysiwyg editors</small></h1>
    <hr style="border-color: white"/>
    <div class="textarea" placeholder="Enter text ..."></div>
  </div>

  <div class="row">
    <div class="span6">
          <h2>About</h2>
          <p>
        bootstrap-wysihtml5 is a javascript plugin that makes it easy to create simple, beautiful wysiwyg editors with the help of <a href="https://github.com/xing/wysihtml5">wysihtml5</a> and <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap 3</a>
      </p>

      <p style="text-align:center; margin-top:20px">
        <a class="btn btn-large btn-primary jumbo" href="https://github.com/Waxolunist/bootstrap3-wysihtml5-bower/">View project on Github</a>
      </p>
    </div>
    <div class="span6" >
      <h2>Usage</h2>

      <p>
        <pre>$('.textarea').wysihtml5();</pre>     
      </p>

    </div>

    <div class="span6">
      <h2>Dynamic text</h2>
      <p>
        Set text dynamically with javascript:
      </p>
      <p style="text-align:center; margin-top:20px">
        <button id="btn-settext" type="button" class="btn btn-default">Set text</button>
      </p>
    </div>
  </div>
</div>


<script data-main="main.js" src="../components/requirejs/require.js"></script>

</div>