<x-layout.show>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
  
    
     
      <div class="content">
        <nav class="display-flex" aria-label="breadcrumb">
          <ol class="display-flex">
            <li class="nav-item"><a href="#!">Page 1</a></li>
            <li class="nav-item"><a href="#!">Page 2</a></li>
            <li class="nav-item active">Default</li>
          </ol>
        </nav>
        <div class="mb-9">
    
          <div id="products" data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
           
                <div class="col-auto"style="float: right">
                  <button class="btn-secondry font-14">Export</button>
                  <button class="btn-secondry font-14" >Add customer</button>
                </div>
              </div>
            </div>
            <div >
              <div >
                <table class="want-table">
                  <thead>
                    <tr >
                      <th ></th>
                      <th >title</th>
                      <th >Author</th>
                      <th >Email</th>
                      <th>ORDERS</th>
                      <th >TOTAL SPENT</th>
                      <th >Category</th>
                      <th >LAST SEEN</th>
                      <th>LAST ORDER</th>
                    </tr>
                  </thead>
                  <tbody >
                    @foreach($wants as $key=> $want)
                         <tr >
                                                  <td >{{$key+1}}</td>

                            <td ><a href="/wants/{{$want->id}}">{{$want->title}}</a></td>

                        <td ><p class="mb-0 ms-3 text-1100 fw-bold">{{$want->author->name}}</p></td>
                      <td >
                        <a  href="mailto:{{$want->author->email}}">
                            {{$want->author->email}}
                        </a>
                    </td>
                      <td >89</td>
                      <td >$ 23987</td>
                      <td >{{$want->category->name}}</td>
                      <td >{{$want->updated_at->diffForHumans()}}</td>
                      <td >{{$want->created_at->diffForHumans()}}</td>
                    </tr>
                    @endForeach
               
             

                  </tbody>
                </table>
              </div>
           
            </div>
          </div>
        </div>
    
      </div>
 

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


</x-layout.show>  
