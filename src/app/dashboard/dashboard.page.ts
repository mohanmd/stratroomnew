import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.page.html',
  styleUrls: ['./dashboard.page.scss'],
})
export class DashboardPage implements OnInit {

  constructor(private route: Router) { }


  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }

  goInitiative(){
    this.route.navigate(['initiatives']);
  }
  gomeeting(){
    this.route.navigate(['meeting']);
  }

  goSwot(){
    this.route.navigate(['swot']);
  }
}
