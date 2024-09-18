@extends('layouts.landing')

@section('content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);">
        </div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Statistik </h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Statistik</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Statistik Pengunjung</h5>
                    </div>
                    <div>
                        <canvas id="myChart"></canvas>
                      </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Stacked Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="myChart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        @foreach ($statistik as $item)
            {{ $item->bulan }}
        @endforeach
      ],
      datasets: [{
        label: '# of Votes',
        data: [
            @foreach ($statistik2 as $item2)
                {{ $item2->pengunjung_perempuan }},
            @endforeach
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endsection
