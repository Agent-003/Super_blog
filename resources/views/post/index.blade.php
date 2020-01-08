@extends('layouts.app')

@section('content')
    <section id="styles" class="s-styles s-content">
        <div class="row add-bottom">
            <div class="col-twelve">
                <h3>All your posts</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th> X </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <a href="{{route('show_post', ['postId' => $post->id])}}">{{ $post->title }}</a>
                                </td>
                                <td>{{ $post->category->name }}</td>
                                <td><form method="post" action="{{ route('delete_post', ['postId'=> $post->id]) }}" >
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn--primary ">X</button>
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