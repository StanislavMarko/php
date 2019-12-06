
@extends('layout')
@section('title')
    Projects
@endsection

@section('content')

    {{--<div style="display: flex; justify-content: space-between; "> <!-- align-items: center; -->--}}
        {{--<div style="order: 2">1</div>--}}
        {{--<div style="order: 3">2</div>--}}
        {{--<div style="order: 1">3</div>--}}

    {{--</div>--}}
    <div class="container">
       <div style="display: flex">
                <h1 class="title nav">Export Projects <a href="{{ route('exportProject') }}"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAABhYWHi4uKfn5/CwsKOjo6IiIiFhYX8/PyioqKLi4s9PT29vb3w8PDIyMjR0dFLS0s4ODhvb294eHgyMjLX19eurq5YWFhlZWWoqKh+fn64uLju7u7FxcWZmZknJycPDw8cHBxCQkIrKysjIyNKSkoZGRnzzR32AAAFsUlEQVR4nO2daXejOgxADVlpJwmZELKSNNO0/f//8LWdTp9TJNtgg6Uc3Y9ZQPcYsxjLUqpH5pvVOrm8ThZ97rRPzsk/rnnsWLogWyYaw9jhhCf7ndwwiR1QaH4K3p1iXTBJHmMHFRJI8K5aMVtDgnekCLfgHSlmV0zwThTxFrwTRawP3o2iuQU/YH7RsAsyV3QRZK3oJshY0VWQrWL2y1WQqaLtMsFesUkLslR074NMFZu2IDvFNoJJMo4dtjvtBBkpthVko9j8JMNNsXULfsDhdNPoQs9QsX0f/Af1A9WjD7JQ9G9B4ophBCkrBhKkq7htpvHH8N0mtgvI2RAxJL85GP4wiG0DkBniXeyBDx/UCv/HLrYOACTxxUgNQUNV4P+Zx/apg/fCkcIMDa14jO1TBz1xzBRuiCvSu3tDu+GHIG6IKhZRbSAww09BgyGmeIjoggA/U/wVNBkiivtoIijgefFL0GgIK5aRNAzkBkGzIaT4EsXBQv2u9FvQYqh2tS8JXiyUGuCCNsNaKy57j96JIypoNfzZigTvaD6Z6UGe9G+shmqqfbOmKqhU9X20FbdB2g1V/ox8QYxqU6RpsfnZCA6GSpXnXZpORj1FGhgnQ9aIIX/EkD9iyB8x5I8Y8kcM+SOG/BFD/oghf8SQP2LIHzHkjxgSIRvki9PICvR+2tWwtG/+tMgHWXi5cr9ynngIzaJwNTRNdbvh12of7k1/eX513e8nUGavq+EU+B3OchjAcn5+arTTXg3fuQ793qbmDaeM9m/4zq59Q+ZL++YJGCbJtp3joE37xTFMkrRqLgjFRNew+bzp6tm+TVqGybLRKefUfkfRDJOkwfJahgnNDkQzdJ8qNvbaTURD1ymbpqwCFyIaup1vNp47iWqYOMw3gqaJNiOqoT0VxZQX4khcQ+vUW0MaiytxDW1pDAv/PcQ2tBynjR+VAGIbvpoEj/b/25l6GDo/45sw3dtYsnjfntNiMrbwOAM27Go4e7RtflKkz2/mMFNcsDT9b3LyeJoOPNY2P01MoeKB4r3g4Dkg0sFoYomn9uE3b1j62dR7Znkn46UV1mvRXIZawsRfrgEyVjsaES5f4JCx8VT4TLr1D6S7Me8MHkrC+hT41BQme6W7UX1woBp7xADv2MIMoHdnOIeCPiM/ToHfBlqVusM3M4/AprEEVMgw0MuBDg2hxz0s1x0yDJT536EhdAXA7mrE0AMx9EAMdcTQAzH0QAx1xNADMfRADHXE0AMx9EAMdcTQAzH0QAx1xNADMfRADHXE0AMx9EAMdTo0hObkBlrRmoghNK06UN1jIobQm9pA6VlEDIGVog0zlxpBxbA+6TFU4WoqhrVpEMHWeiZjqG5zVMItwUrH8KYrhuqEipSh2ly+Nvon5CrBlAyVyser7eocdiFrWoZdIIY6YkgTMdQRQ5qIoY4Y0kQMdcSQJmKoI4Y0EUMdMaSJGOqIIU3EUEcMaSKGOmJIEzHUEUOaiKGOGNJEDHXEkCZiqCOGNBFDHTGkiRjqiCFNxFBHDGkihjo74LenXqNtwwiIGltzD1oZctVrtG2A2gWLGlpjMVT+VWeApTjGyI/hmgG0eyK8bi6W+IcsBR0qQakLkDXksXwHrGoAtMg6DbDFq9E/oPWPCJa5e28QtJwRnnNkKN4xpXas5oYF6vGkI2Nxi8vuYTHwXtjbn2w+WDxAl4j/MWSnBlm4Pzqm80YVO7ggGA+0e2hE86kfXB2bGZYc8SA1PKJirYcEPUJxwv6okCHlBpiwtgpyP586XbCRMhcscCxlyVbx4lyrs8LKsdBm3eSe0nzfR5OGAy5+ZSxj0HgVg6pdMeBYbNs89RwvscN25tp20PN7IQvaPEF10FyZ0T9Wt77jnYOhpdxcVF73LcpV16k2RYi6iKG5Ho4hB1Xm5XFcLNcvl9heydvTens4z0pXu/8Aaphksr3G9WoAAAAASUVORK5CYII=" alt=""></a>(create new<a href="/projects/create"><img width="20" height="20" src="data:image/jpeg;base64,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" alt=""></a>)</h1>

       </div>
       <br>
   </div>
    <div class="bd-example bd-example-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach ($projects as $i => $project)
                <li class="nav-item">
                    <a class="nav-link @if ($i == 0) active @endif" id="tab-{{ $project->id }}" data-toggle="tab"
                       href="#href_{{ $project->id }}" role="tab" aria-controls="aria_{{ $project->id }}" aria-selected="@if ($i == 0) true @else false @endif">
                        {{ $project->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <br>
        <div style="display: flex; justify-content: space-between">
            <div></div>
            <div style="display: flex">
                <a class="btn btn-primary" href="/projects/{{ $project->id }}/edit" role="button">Edit</a>
                <form method="POST" action="/projects/{{ $project->id }}">
                    @method('DELETE')
                    @csrf
                    <div class="field">
                        <div class="control"><button type="button" class="btn btn-primary btn-danger" data-toggle="modal" data-target="#exampleModal">Delete Project</button></div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hey</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Do you want delete this project ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            @foreach ($projects as $i => $project)
                <div class="tab-pane fade @if ($i == 0) active show @endif" id="href_{{ $project->id }}" role="tabpanel" aria-labelledby="aria_{{ $project->id }}-tab">
                    <br>
                    <p>
                        {{ $project->description }}
                    </p><br><br><br>

                </div>
            @endforeach


    </div>
@endsection
