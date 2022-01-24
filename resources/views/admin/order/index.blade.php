@extends('layouts.admin')
@section('title','List of All Orders')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                <th>
                    <tr>
                        <td>Id</td>
                        <td>Cart</td>
                        <td>Address</td>
                        <td>Status</td>

                    </tr>
                </th>
                </thead>

                <tbody>
                @foreach($orders as $order)
                    <tr role="row" class="odd">
                        <td>
                            <a href="/order/{{$order->id}}">   {{$order->id}}</a>

                        </td>
                        <td class="sorting_1">
                            <ul>

                                @foreach($cart_item=json_decode($order->cart) as $cart)

                                <li class="btn btn-outline-primary pull-right"><a href="/item/{{$cart->slug}}" class="list-inline-item">{{$cart->name}}</a>  X {{$cart->quantity}}  </li>
                                @endforeach

                            </ul>

                        </td>

                        <td>
                             <ul>
                                 <li class="align-content-xxl-between"><small class="pull-left btn-block"> First Name:</small> <span class="btn btn-outline-primary pull-right"> {{$order->address->first_name}}</span>  </li>
                                 <li>Last Name <span class="btn btn-outline-primary pull-right">: {{$order->address->first_name}}</span>  </li>
                                 <li>city: <span class="btn btn-outline-primary pull-right"> {{$order->address->city}}</span>  </li>
                                 <li>recipient_name: <span class="btn btn-outline-primary pull-right"> {{$order->address->recipient_name}} </span>  </li>
                                 <li>Address line1: <span class="btn btn-outline-primary pull-right"> {{$order->address->line1}}</span>  </li>
                                 <li>user_id: <span class="btn btn-outline-primary pull-right"> {{$order->address->user_id}}</span>  </li>
                                 <li>state:  <span class="btn btn-outline-primary pull-right">{{$order->address->state}} </span>  </li>
                                 <li>Postal Code:  <span class="btn btn-outline-primary pull-right">{{$order->address->postal_code}} </span>  </li>
                                 <li>Email: <span class="btn btn-outline-primary pull-right"> {{$order->address->email}} </span>  </li>
                             </ul>
                        </td>

                        <td>
                            {{$order->status}}
                            <form action="{{route('order.status')}}" method="post">
                                @csrf
                                <input type="hidden" name="order_id" value="{{$order->id}}">
                                <select name="status" id="status" class="form-control">
                                    <option value="created" {{ ($order->status) == 'created' ? 'selected' : '' }} >Created</option>
                                    <option value="created" {{ ($order->status) == 'created' ? 'selected' : '' }} >Created</option>
                                    <option value="sent" {{ ($order->status) == 'sent' ? 'selected' : '' }} >Sent</option>
                                    <option value="deliver" {{ ($order->status) == 'deliver' ? 'selected' : '' }} >Deliverd / Completed</option>

                                </select>
                                <button class="form-control btn-primary"> Update</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
