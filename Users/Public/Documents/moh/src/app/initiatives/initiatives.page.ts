import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';

import {IntiativeModalpopupPage} from '../intiative-modalpopup/intiative-modalpopup.page';

@Component({
  selector: 'app-initiatives',
  templateUrl: './initiatives.page.html',
  styleUrls: ['./initiatives.page.scss'],
})
export class InitiativesPage implements OnInit {

  constructor(private route: Router, private modalControler: ModalController) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }
  goDetail(){
    this.route.navigate(['initiative-detail']);
  }
  goLogin1(){
    this.route.navigate(['meetings/meetings']);
  }

  // popup modal
  async presentModal() {
    const modal = await this.modalControler.create({
      component: IntiativeModalpopupPage,
    });
    return await modal.present();
  }

}
