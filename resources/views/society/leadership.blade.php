@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/the-society/who-we-are/leadership' , 
              'title' => 'Leadership'
              ]
              )) 
@stop()
@section('content')
<div class="ers-content leadership-content">


      <div class="col-md-10">
      <div class="main-content">
        <div class="page-head">
        <h2 class="">Leadership</h2>
        </div>

        <h4 style="margin-bottom:50px;"><strong>Executive Committee</strong></h4>
        <div id="spin" class="icon"><span class="fa fa-spinner fa-pulse fa-3x"></span></div>
        <div id="leadership" class="row leadership-people">
        </div>
       

        <!--Departments Menu-->
        <div class="row row_depertment">
          <div class="col-md-5 col-md-offset-1">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/leadership/assembly-heads"><img class="img-responsive" src="https://cdn.ersnet.org/images/world.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/leadership/assembly-heads">Assembly Heads</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/leadership/assembly-secretaries"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/educational.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/leadership/assembly-secretaries">Assembly Secretaries</a>
                    </div>
                </div>
            </div>
            <p>
        </div>
        <!--Fin Departments Menu-->
    </div>
          {{-- Footer --}}
      @include('footer')
</div>
  
@include('nav.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

@section('scripts')
{{-- <script src="https://jpillora.com/jquery.rest/dist/1/jquery.rest.min.js"></script> --}}
<script src="/js/jquery.rest.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
    var apiUrl = '{{ env('API_URL') }}' ? '{{ env('API_URL') }}' : 'https://api.ersnet.org/' ;
    var client = new $.RestClient(apiUrl, {
        cache: 180, //This will cache requests for 60 seconds
        // cachableMethods: ["GET"] //This defines what method types can be cached (this is already set by default)
    });

    client.add('leadership');
    client.leadership.read().done(function (data){
        const l = data.data;
        const leadership = l.map(i => {
            const linkDoi = `<a data-toggle="modal" data-target="#md-${i.Contact.FirstName.split(' ').join('') + i.Contact.LastName.split(' ').join('')}"type="button" class="">Declaration of Interests</a>`
            const person = `
                <div class="col-md-4 xs-mb-15">
                    <img src="${i.Contact.PhotoUrl || 'images/120x120.jpg' }" class="img-circle">
                    <p class="photo_caption"><strong>${i.Contact.FirstName} ${i.Contact.LastName}</strong>
                    ${i.role} <br>
                    ${i.Declaration ? linkDoi : ''}
                </div>`
            
            $(person).appendTo('#leadership');
            
            // modal windows        
            const header = `
                        <div class="modal-header">
                            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
                            <h3 class="modal-title">Declaration of Interests of ${i.Contact.FirstName} ${i.Contact.LastName}</h3>
                            <h4>${i.Declaration ? i.Declaration.Campaign.Title : ''}</h4>
                        </div>
            `;

            let legend = `
                <hr />
                <h5>*Funds Code Legend</h5>
                <table style="margin-top:0;" class="table table-condensed table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">A</th>
                            <th class="text-center">B</th>
                            <th class="text-center">C</th>
                            <th class="text-center">D</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">less than € 1'000</td>
                            <td class="text-center">€ 1001 - € 5'000</td>
                            <td class="text-center">€ 5'001 - € 20'000</td>
                            <td class="text-center">more than € 20'000</td>
                        </tr>
                    </tbody>
                </table>
            `;

            function buildTable(data) {
                let tb = [];
                let th = '';

                if (data.length > 0) {
                    data.map(d => {
                        if(d.SectionCode === 'CON') {
                            tb.push(`
                                <tr>
                                    <td class="text-left">${d.CompanyName}</td>
                                    <td class="text-left">${d.Area}</td>
                                    <td class="text-left">${d.Purpose}</td>
                                    <td class="text-left">${d.FundsCode}</td>
                                </tr>
                            `);

                            th = `
                                <tr>
                                    <th class="text-left">Company</th>
                                    <th class="text-left">Area</th>
                                    <th class="text-left">Product</th>
                                    <th class="text-left">Amount of funds received*</th>
                                </tr>
                            `;
                        }

                        if(d.SectionCode === 'BEN') {
                            tb.push(`
                                <tr>
                                    <td class="text-left">${d.CompanyName}</td>
                                    <td class="text-left">${d.Purpose}</td>
                                    <td class="text-left">${d.FundsCode}</td>
                                </tr>
                            `);

                            th = `
                                <tr>
                                    <th class="text-left">Company</th>
                                    <th class="text-left">Purpose of Payment</th>
                                    <th class="text-left">Amount of funds received*</th>
                                </tr>
                            `;
                        }

                        if(d.SectionCode === 'TRA') {
                            tb.push(`
                                <tr>
                                    <td class="text-left">${d.CompanyName}</td>
                                    <td class="text-left">${d.Purpose}</td>
                                    <td class="text-left">${d.FundsCode}</td>
                                </tr>
                            `);

                            th = `
                                <tr>
                                    <th class="text-left">Company</th>
                                    <th class="text-left">Purpose and Nature of Benefit</th>
                                    <th class="text-left">Amount of funds received*</th>
                                </tr>
                            `;
                        }

                        if(d.SectionCode === 'SHA') {
                            tb.push(`
                                <tr>
                                    <td class="text-left">${d.CompanyName}</td>
                                    <td class="text-left">${d.FundsCode}</td>
                                </tr>
                            `);

                            th = `
                                <tr>
                                    <th class="text-left">Company</th>
                                    <th class="text-left">Approximate value*</th>
                                </tr>
                            `;
                        }

                        if(d.SectionCode === 'NOP') {
                            tb.push(`
                                <tr>
                                    <td class="text-left">${d.CompanyName}</td>
                                    <td class="text-left">${d.Purpose}</td>
                                    <td class="text-left">${d.FundsCode}</td>
                                </tr>
                            `);

                            th = `
                                <tr>
                                    <th class="text-left">Company</th>
                                    <th class="text-left">Nature of Support</th>
                                    <th class="text-left">Amount of funds received*</th>
                                </tr>
                            `;
                        }

                        if(d.SectionCode === 'OTH') {
                            tb.push(`
                                <tr>
                                    <td class="text-left">${d.CompanyName}</td>
                                    <td class="text-left">${d.Purpose}</td>
                                </tr>
                            `);

                            th = `
                                <tr>
                                    <th class="text-left">Company or organisation</th>
                                    <th class="text-left">Nature/Purpose of Support</th>
                                </tr>
                            `;
                        }

                    });
                } else {
                    tb.push('None');
                }
                
                return `
                    <table style="margin-top:0;" class="table table-condensed table-hover table-bordered table-striped">
                        <thead>
                            ${th}
                        </thead>
                        <tbody>
                            ${tb.join('')}
                        </tbody>
                    </table>
                `;
            }

            function checkData(data){
                return data ? buildTable(data) : 'None';
            }
            
            const body = `          
                <div class="modal-body">
                    <h4>${i.sorted.pInterests.title}</h4>
                    <h5><b>Regular Paid Consultancy Work</b></h5>
                        ${checkData(i.sorted.pInterests.data['CON'])}
                    <h5><b>Personal Benefits</b></h5>
                        ${checkData(i.sorted.pInterests.data['BEN'])}
                    <h5><b>Personal Travel Grants or expenses for conferences etc.</b></h5>
                        ${checkData(i.sorted.pInterests.data['TRA'])}
                    <h5><b>Shares in any Relevant Companies (excluding mutual funds)</b></h5>
                        ${checkData(i.sorted.pInterests.data['SHA'])}
                        
                    <h4>${i.sorted.npInterests.title}</h4>
                        ${buildTable(i.sorted.npInterests.data)}
                    <h4>${i.sorted.oInterests.title}</h4>
                        ${buildTable(i.sorted.oInterests.data)}
                    <h4>${i.sorted.tobacco.title}</h4>
                    <div class="text-left">
                        <p>
                            ${i.sorted.tobacco.data.length > 0 ? i.sorted.tobacco.data : 'None'}                       
                        </p>
                    </div>
                    ${legend}
                </div>        
                `;

            const modal = `
                <div id="md-${i.Contact.FirstName.split(' ').join('') + i.Contact.LastName.split(' ').join('')}" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        ${header}
                        ${body}
                        </div>
                    </div>
                </div>
            `;
            
            $(modal).appendTo('#ersMainWebsite');
        });
        $('#spin').hide();
    });
});    
</script>
@stop()