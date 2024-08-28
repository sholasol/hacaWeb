<x-front-layout>
    <style>
        .signature{
                font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                color: #0099D5;
            }

            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid transparent;
                background: #0099D5;
                color: #fff;
            }
            .font-weight-lighter{
                font-weight: 300;
                background: #0099D5;
                color: #fff;
            }
            .inv{
                background: #E6E4E7;
            }
            .my-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important;
            }
            .my-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important;
            }
            .py-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important;
            }
            .px-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            .border-bottom{
                border-bottom: 2px solid #000 !important;
                /*width: 35%;*/
                padding: 0px 0px 5px 0px;
            }
    </style>
    <div class="container inv my-5 px-5 py-5">
       <div class="row">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="font-weight-lighter py-1 px-3">INVOICE</h1>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-6">
                    <p class="mb-0">INVOICE TO</p>
                    <h5 class="mb-0"><b>{{$payment->customer}}</b></h5>
                    <p class="mb-0">{{$payment->email}}</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Invoice No</td>
                                        <td class="px-3">:</td>
                                        <td>000-{{$payment->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="px-3">:</td>
                                        <?php $checkInDate = Carbon\Carbon::parse($payment->created_at); ?>
                                        
                                        <td>{{ $checkInDate->format('Y-m-d') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ITEM DESCREPTION</th>
                                <th scope="col">QTY</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <b>{{ucwords($payment->product)}}</b>
                                    <b>({{ucwords($payment->type)}})</b>
                                </td>
                                <td>{{$payment->quantity}}</td>
                                <td>{{$payment->price}}</td>
                                <td>{{$payment->price}}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td><b>SUB Total</b></td>
                                <td><b>£ {{number_format($payment->price)}}</b></td>
                            </tr>
                            <tr style="background: #E6E4E7; color: #0099D5;">
                                <td colspan="2"></td>
                                <td><b>GRAND TOTAL</b></td>
                                <td><b>£ {{number_format($payment->price)}}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="ml-5 border-bottom">Payment Method: {{$payment->method}}</h5>
                    <p></p>
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <h5 class="ml-5">Terms and Conditions</h5>
                    <p class="ml-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3 text-center">
                    <h3 class="signature">Hull Afro Caribbean Association</h3>
                    <p>Property Owner</p>
                </div>
            </div>
       </div>
    </div>
</x-front-layout>