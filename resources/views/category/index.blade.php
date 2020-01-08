@extends('layouts.app')

@section('content')
    <section id="styles" class="s-styles s-content">
        <div class="row add-bottom">
            <div class="col-twelve">
                <h3>All your categories</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)

                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>

                                <td><form method="post" action="{{ route('delete_category', ['$categoryId'=> $category->id]) }}" >
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit">X</button>
                                    </form>
                                </td>
                                {{--                                <td><a href="{{ route('delete_post', ['postId'=> $post->id]) }}">X</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection