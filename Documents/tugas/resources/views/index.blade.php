@extends('master.blank')

@section('content')
<h1>Daftar Pertanyaan</h1>
<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $question as $key => $quest)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$quest->judul}}</td>
                      <td>{{$quest->isi}}</td>
                      <td>
                        <a href="#" class="btn btn-sm btn-info"></a>
                      </td>
                    </tr>

                    @endforeach

                  </tbody>
                </table>

<a href="/items/create" class="btn btn-primary">Buat Pertanyaan Baru</a>
@endsection
