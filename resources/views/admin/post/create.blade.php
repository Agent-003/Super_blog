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
                        <input name="title" type="text" id="title" class="full-width" placeholder="Title">
                    </div>
                    <div class="preview form-field">
                        <textarea name="preview" id="preview" class="full-width" placeholder="Preview"></textarea>
                    </div>
                    <div class="preview form-field">
                        <textarea name="content" id="content" class="full-width" placeholder="Content"></textarea>
                    </div>

                    <label for="category">Category</label>

                    <select name="category_id" id="category" class="full-width">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="poster">Poster</label>
                    <input type="file" name="poster"/>
                    <input type="submit" class="submit btn btn--primary full-width" value="Create post"/>
                </fieldset>
            </form>
        </div>
    </div>
</section>
@endsection