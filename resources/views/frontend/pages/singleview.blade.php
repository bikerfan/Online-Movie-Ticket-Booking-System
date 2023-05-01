@extends('frontend.master')


@section('content')
<div id="boxed">

    <section class="sub_header" id="bg_general">
        <div class="sub_header_content">

        </div>
    </section>

    <style>
        table td {
            text-align: center;
        }
    </style>
    <div class="bg_gray">
        <div class="container">
            <div id="Report">

                <h3>{{auth()->user()->name}}</h3>
                <br>
                <p style="margin-bottom:5px;"></p>
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                                <p style="margin-bottom:0; padding:5px 7px; text-align:center; background:#a43943; color:#FFF;">Single View</p>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Seat</th>
                                    <th scope="col">Ticket</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                                <tr>
                                <tr>
                                    <th scope="row">{{$data->id}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->time}}</td>
                                    <td>{{$data->seat}}</td>
                                    <td>{{$data->ticket}}</td>
                                    <td>{{$data->amount}}</td>
                                    <td>{{$data->status}}</td>
                                        
                                   
                                </tr>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>


                
                
            </div>
            <button onclick="printDiv('Report')" class="btn btn-success">Print</button>
            <!-- End container -->
        </div>
    </div>

    </body>
    
   
    <!-- End footer -->
</div>
<div class="row">
    <div class="col-md-4">



    </div>
    <div class="col-md-4">


    </div>
    <div class="col-md-4">

    </div>

</div>
<script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection