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
              <div class="card">
                <div class="avatar">
                  <div class="circle-avatar">
                    {{substr($want->author->name, 0,1)}}
                  </div>
                  <div>{{$want->author->name}}</div>
             
                </div>
            <div class="div">{{$want->title}}</div>
            <div class="font-14">
                    {{$want->body}}
                  </div>
              </div>
           
            </div>
          </div>
          @foreach($want->comments as $comment)
               <div class="card mt-15 ml-15">
                <div class="avatar">
                  <div class="circle-avatar">
                    {{substr($comment->author->name, 0,1)}}
                  </div>
                  <div>{{$comment->author->name}}</div>
             
                </div>
            <div class="font-14">
                    {{$comment->body}}
                  </div>
              </div>
           
            </div>
        
          @endForeach
        </div>
    
      </div>
 

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


</x-layout.show>  
