<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            Hi.. <b>{{Auth::user()->name}} </b>
            <b style="float: right">Total Users <span class="badge badge-primary">{{count($users)}} </span></b>
        </h2>
    </x-slot>

    <div class="py-12">

            <div class="container">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Create At</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp


                        @foreach ($users as $us )

                        <tr>
                            <th scope="row">{{$i++}} </th>
                            <td>{{$us->name}}</td>
                            <td>{{$us->email}} </td>
                            <td>{{Carbon\Carbon::parse($us->created_at)->diffForHumans()}} </td>
                          </tr>
                        @endforeach


                    </tbody>
                  </table>
            </div>

    </div>
</x-app-layout>
