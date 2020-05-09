import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-initiative-budget',
  templateUrl: './initiative-budget.page.html',
  styleUrls: ['./initiative-budget.page.scss'],
})
export class InitiativeBudgetPage implements OnInit {

  constructor(private route: Router) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }

}
