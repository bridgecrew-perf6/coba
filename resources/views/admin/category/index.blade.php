<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            Hi.. <b>{{Auth::user()->name}} </b>
            <b style="float: right">Total Category <span class="badge badge-primary"></span></b>
        </h2>
    </x-slot>

    <div class="py-12">

            <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All Category</div>

                <table class="table">

                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Code Category</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Create At</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp


                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>



                    </tbody>
                  </table>
                </div>
            </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">halo</div>
                <div class="card-body">
                <form action="{{route('store.category')}} " method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category Name</label>
                        <input type="text" class="form-control" name="category_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    </div>


            <</div>
</x-app-layout>
