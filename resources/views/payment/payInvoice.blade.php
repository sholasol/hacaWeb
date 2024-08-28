<x-admin-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="{{asset('images/logo.jpg')}}">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #000-{{$payment->id}}</p>
                            <?php $checkInDate = Carbon\Carbon::parse($payment->created_at); ?>
                            <p class="text-muted">{{ $checkInDate->format('Y-m-d') }}</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1">{{$payment->customer}}</p>
                            <p>{{$payment->email}}</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">Date: </span> {{ $checkInDate->format('Y-m-d') }}</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Type</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Amount</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <b>{{ucwords($payment->product)}}</b>
                                        </td>
                                        <td>
                                            <b>{{ucwords($payment->type)}}</b>
                                        </td>
                                        <td>{{$payment->quantity}}</td>
                                        <td>{{number_format($payment->price)}}</td>
                                        <td>{{number_format($payment->price)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light text-white">£ {{number_format($payment->price)}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Payment Mode</div>
                            <div class="h2 font-weight-light text-white">{{$payment->method}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light text-white">£ {{number_format($payment->price)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</x-admin-layout>