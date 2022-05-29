@extends('layouts.main') 

@section('content') 

   <section class="section section-bredcrumbs">
    <div class="container context-dark breadcrumb-wrapper">
      <h1>Tax Calculators</h1>
    </div>
  </section>

  <section class="section section bg-default">
    <div class="container mt-4 mb-4">
      <h3>Break Even Calculator</h3>
      <p>This calculator will provide the sales figure you need in order to break even, i.e. obtain a net profit figure of zero.</p>

      <div class="row">
        <div class="col-6">
          <input class="form-control" type="number" id="num1">
        </div>
        <div class="col-6">
          <input class="form-control" type="number" id="num2">
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <input class="form-control" type="number" id="num3">
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <button class="btn btn-primary" onclick="test()">Cal</button>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div id="result"></div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('scripts')

  <script>
    function removeElement(id) {
        var elem = document.getElementById(id);

        if(elem)
          return elem.parentNode.removeChild(elem);
    }

    function test() {
      removeElement('calculator');
      var num1 = document.getElementById("num1").value;
      var num2 = document.getElementById("num2").value;

      var result = document.getElementById("num3").value = num1 + num2;

      var body = document.getElementById('result');
      var tbl = document.createElement('table');
      tbl.style.width = '100%';
      tbl.setAttribute('id', 'calculator');
      tbl.setAttribute('class', 'table table-dark table-hover');

      var tbdy = document.createElement('tbody');
      
      var tr = document.createElement('tr');
      
      var td = document.createElement('td') ;
      td.appendChild(document.createTextNode('Net Profit:'))
      tr.appendChild(td)

      var td = document.createElement('td') ;
      td.appendChild(document.createTextNode(result))
      tr.appendChild(td)

      tbdy.appendChild(tr);

      tbl.appendChild(tbdy);
      body.appendChild(tbl)
    }
  </script>

@endsection