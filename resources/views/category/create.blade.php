@extends('layouts.app')

@section('content')
<section class="s-content s-content--narrow">

    <div class="row">
        <h3> Create post.</h3>
        <div class="col-full s-content__main">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="form-field">
                        <input name="name" type="text" id="title" class="full-width" placeholder="Name">
                    </div>
                    <input type="submit" class="submit btn btn--primary full-width" value="Create post"/>
                </fieldset>
            </form>
        </div>
    </div>
</section>
@endsection