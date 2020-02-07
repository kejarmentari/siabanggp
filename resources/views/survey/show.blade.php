@extends('layouts.base', ['title' =>'Detail Data Gedung'])

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-5 col-12">Description lists</dt>
                    <dd class="col-sm-7 col-12">A description list is perfect for defining terms.</dd>

                    <dt class="col-sm-5 col-12">Euismod</dt>
                    <dd class="col-sm-7 col-12">
                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                        <p>Donec id elit non mi porta gravida at eget metus.</p>
                    </dd>

                    <dt class="col-sm-5 col-12">Malesuada porta</dt>
                    <dd class="col-sm-7 col-12">Etiam porta sem malesuada magna mollis euismod.</dd>

                    <dt class="col-sm-5 col-12 text-truncate">Truncated term is truncated</dt>
                    <dd class="col-sm-7 col-12">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                    <dt class="col-sm-5 col-12">Nesting</dt>
                    <dd class="col-sm-7 col-12">
                        <dl class="row">
                        <dt class="col-sm-4">Nested definition list</dt>
                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                        </dl>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
@endsection