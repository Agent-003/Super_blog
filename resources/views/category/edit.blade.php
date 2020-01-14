@extends('layouts.app')

@section('content')
    <section class="s-content s-content--narrow">

        <div class="row">
            <h3>Edit category</h3>
            <div class="col-full s-content__main">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <input name="id" type="hidden" id="id"  value="{{ $category->id }}">
                        <div class="form-field">
                            <input name="name" type="text" id="title" class="full-width" value="{{ $category->name }}">
                        </div>
                        <input type="submit" class="submit btn btn--primary full-width" value="Edit category"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
@endsection