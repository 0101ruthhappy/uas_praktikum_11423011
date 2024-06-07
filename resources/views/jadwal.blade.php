@extends('layout.template')

@section('title', 'DEL Badminton')

@section('header5', 'header5')

@section('active-jadwal', 'active')

@section('content')
    
    <!---->
	<div class="back" style="background-color: #e9ecef; padding: 20px;">
		<h2 >Jadwal</h2>
	</div>
	<!---->
	<div class="container" style="margin-top: 20px;">
		<div class="contact" style="margin-bottom: 30px;">
			@foreach ($lapangan as $lapangan)	
				<div class="typrography" style="margin-bottom: 20px;">
					<h3 style="color: #17a2b8;">Jadwal Lapangan {{ $loop->iteration }}</h3>
					<div class="bs-docs-example" style="margin-top: 10px;">
						<table class="table table-striped" style="width: 100%; border: 1px solid #dee2e6;">
							<thead style="background-color: #f8f9fa;">
								<tr>
									<th style="padding: 8px; text-align: left; color: #495057;">Tanggal Main</th>
									<th style="padding: 8px; text-align: left; color: #495057;">Lama Main</th>
									<th style="padding: 8px; text-align: left; color: #495057;">Jam Main</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($jadwal as $row)
									@if ($row->lapangan_id == $lapangan->lapangan_id)	
										<tr>
											<td style="padding: 8px; border: 1px solid #dee2e6; color: #343a40;">{{ $row->tanggal }}</td> 
											<td style="padding: 8px; border: 1px solid #dee2e6; color: #343a40;">{{ $row->lama_mulai }}</td>  
											<td style="padding: 8px; border: 1px solid #dee2e6; color: #343a40;">{{ $row->jam_mulai . '-' . $row->jam_habis }}</td>  
										</tr>
									@endif	
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endforeach
			
		</div>
	</div>

@endsection

@section('js')

@endsection
