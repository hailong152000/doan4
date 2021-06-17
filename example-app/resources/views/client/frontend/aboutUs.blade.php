@extends('layout.frontend.master')

@section('title','About Us page')

@section('content')
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Chúng tôi là một cửa hàng hàng đầu</h2>
            <p class="large">Nhanh nhất và tốt nhất!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>Chúng tôi làm gì?</h3>
          <p>Hoàng là 1 leader rất tốt,anh ấy là chủ cửa hàng và có kiến thức sâu rộng về máy tính</p>
          <ul>
            <li><i class="fa fa-check-circle"></i>Long là 1 thợ sửa máy tính chuyên nghiệp</li>
            <li><i class="fa fa-check-circle"></i>Huynh là một rất khá về điện thoại</li>
            <li><i class="fa fa-check-circle"></i>Chiến là một nhân viên chăm sóc khách hàng tuyệt vời</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="{{asset('client')}}/images/it_service/post-06.jpg" alt="#" /> </div>
      </div>
    </div>
    <div class="row" style="margin-top: 35px">
      <div class="col-md-8">
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i>Khôi phục hoàn toàn từ ổ đĩa cục bộ và bên ngoài<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Trái với suy nghĩ của nhiều người, lorem ipsum không chỉ đơn giản là văn bản ngẫu nhiên. Nó có nguồn gốc từ một phần văn học cổ điển Latinh từ năm 45 trước Công nguyên, làm cho nó
                        hơn 2000 năm tuổi. Richard McClintock, giáo sư tiếng Latinh tại Đại học Hampden-Sydney ở Virginia, đã tra cứu một trong những từ tiếng Latinh khó hiểu hơn,
                        Minneapolis, từ một đoạn văn thạch cao ở lorem, và xem qua các trích dẫn của từ này trong văn học cổ điển, đã khám phá ra nguồn gốc không thể nghi ngờ.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Khôi phục Ảnh, Hình ảnh, Video và Âm thanh<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Trái với suy nghĩ của nhiều người, lorem ipsum không chỉ đơn giản là văn bản ngẫu nhiên. Nó có nguồn gốc từ một phần văn học cổ điển Latinh từ năm 45 trước Công nguyên, làm cho nó
                        hơn 2000 năm tuổi. Richard McClintock, giáo sư tiếng Latinh tại Đại học Hampden-Sydney ở Virginia, đã tra cứu một trong những từ tiếng Latinh khó hiểu hơn,
                        Minneapolis, từ một đoạn văn thạch cao ở lorem, và xem qua các trích dẫn của từ này trong văn học cổ điển, đã khám phá ra nguồn gốc không thể nghi ngờ.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Khôi phục dữ liệu điện thoại di động<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Trái với suy nghĩ của nhiều người, lorem ipsum không chỉ đơn giản là văn bản ngẫu nhiên. Nó có nguồn gốc từ một phần văn học cổ điển Latinh từ năm 45 trước Công nguyên, làm cho nó
                        hơn 2000 năm tuổi. Richard McClintock, giáo sư tiếng Latinh tại Đại học Hampden-Sydney ở Virginia, đã tra cứu một trong những từ tiếng Latinh khó hiểu hơn,
                        Minneapolis, từ một đoạn văn thạch cao ở lorem, và xem qua các trích dẫn của từ này trong văn học cổ điển, đã khám phá ra nguồn gốc không thể nghi ngờ.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Khôi phục hoàn toàn từ ổ đĩa cục bộ và bên ngoài<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Trái với suy nghĩ của nhiều người, lorem ipsum không chỉ đơn giản là văn bản ngẫu nhiên. Nó có nguồn gốc từ một phần văn học cổ điển Latinh từ năm 45 trước Công nguyên, làm cho nó
                        hơn 2000 năm tuổi. Richard McClintock, giáo sư tiếng Latinh tại Đại học Hampden-Sydney ở Virginia, đã tra cứu một trong những từ tiếng Latinh khó hiểu hơn,
                        Minneapolis, từ một đoạn văn thạch cao ở lorem, và xem qua các trích dẫn của từ này trong văn học cổ điển, đã khám phá ra nguồn gốc không thể nghi ngờ..</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full" style="margin-top: 35px;">
          <h3>Tại sao phải Backup dữ liệu?</h3>
          <p>Backup dữ liệu là 1 việc thực sự quan trọng,nếu không may có 1 vấn đề gì về máy tính của bạn thì sau khi khắc phục sẽ ngay lập tức có lại dữ liệu</p>
          <p><a class="btn main_bt" href="#">Đọc thêm</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>About Service</h2>
            <p class="large">Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-wrench"></i></div>
                <h4 class="service-heading">Honest Services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-cog"></i></div>
                <h4 class="service-heading">Secure payments</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-history"></i></div>
                <h4 class="service-heading">Expert team</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-heart-o"></i></div>
                <h4 class="service-heading">Affordable services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Experienced Staff</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{asset('client')}}/images/it_service/team-member-1.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Dean Michael</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{asset('client')}}/images/it_service/team-member-2.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Ruby Jake</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{asset('client')}}/images/it_service/team-member-3.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>David Hussay</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{asset('client')}}/images/it_service/team-member-1.jpg" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Dean Michael</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section -->
@stop