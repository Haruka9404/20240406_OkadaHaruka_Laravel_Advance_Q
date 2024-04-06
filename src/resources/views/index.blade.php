@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <!-- @yield('content') -->
            @if (session('message'))
                <a class="success-message">
                    {{ session('message') }}
                </a>
            @endif
            @if ($errors->any())
                <div class="danger-message">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <div class="make-todo">
                <div class="make-todo__content">
                    <form class="make-todo__content__form" action="/todos" method="post">
                    @csrf
                        <input class="make-todo__content__text" type="text" name="content" placeholder="やること"></input>
                        <!-- {{ old('name') }} -->
                        <button class="make-todo__content__button" type="submit">作成</button>
                    </form>
                </div>
            </div>
            {{-- <div class="todo-list"> --}}
            {{-- <ul> --}}
                {{-- <li> --}}
                    {{-- <a>Todo</a> --}}
                {{-- </li> --}}
                {{-- <li>test1 --}}
                    {{-- <div class="todo-list__content"> --}}
                    {{-- <span class="todo-content__update">更新</span> --}}
                    {{-- <span class="todo-content__delete">削除</span> --}}
                    {{-- </div>
                </li>

                <li>test2
                <div class="todo-list__content">
                    <span class="todo-content__update">更新</span>
                    <span class="todo-content__delete">削除</span>
                </div>
                </li>

                <li>#
                <div class="todo-list__content">
                    <span class="todo-content__update">更新</span>
                    <span class="todo-content__delete">削除</span>
                </div>
                </li>
            </ul>
        </div> --}}

        <div class="todo-table">
            <table class="todo-table__inner">
@foreach ($todos as $todo)
<tr class="todo-table__row">
  <td class="todo-table__item">
    <form class="update-form">
      <div class="update-form__item">
        <p class="update-form__item-input">{{ $todo['content'] }}</p>
      </div>
      <div class="update-form__button">
        <button class="update-form__button-submit" type="submit">更新</button>
      </div>
    </form>
  </td>
  <td class="todo-table__item">
    <form class="delete-form">
      <div class="delete-form__button">
        <button class="delete-form__button-submit" type="submit">削除</button>
      </div>
    </form>
  </td>
</tr>
@endforeach
                {{-- <tr class="todo-table__row">
                    <th class="todo-table__header">Todo</th>
                </tr>
                <tr class="todo-table__row">
                    <td class="todo-table__item">
                        <form class="update-form">
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="content" value="">
                            </div>
                            <div class="update-form__button">
                                <button class="update-form__button-submit" type="submit">更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="todo-table__item">
                        <form class="delete-form">
                            <div class="delete-form__button">
                                <button class="delete-form__button-submit" type="submit">削除</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr class="todo-table__row">
                    <td class="todo-table__item">
                        <form class="update-form">
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="content" value="test2">
                            </div>
                            <div class="update-form__button">
                                <button class="update-form__button-submit" type="submit">更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="todo-table__item">
                        <form class="delete-form">
                            <div class="delete-form__button">
                                <button class="delete-form__button-submit" type="submit">削除</button>
                            </div>
                        </form>
                    </td>
                </tr> --}}
            </table>
        </div>

@endsection