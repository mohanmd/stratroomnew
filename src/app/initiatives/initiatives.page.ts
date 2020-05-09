import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';
import { NgModule } from '@angular/core';


import {IntiativeModalpopupPage} from '../intiative-modalpopup/intiative-modalpopup.page';

@Component({
  selector: 'app-initiatives',
  templateUrl: './initiatives.page.html',
  styleUrls: ['./initiatives.page.scss'],
})
export class InitiativesPage implements OnInit {
  public buttonTrue: boolean;

  constructor(private route: Router, private modalControler: ModalController) { }

  ngOnInit() {

  }

  goLogin() {
    this.route.navigate(['dashboard']);
  }
  goDetail() {
    // alert('1')
    this.route.navigate(['/initiative-detail']);
  }


  // popup modal
  async presentModal(value) {
    // alert('1')
    this.buttonTrue = true;

    console.log(value);
    const modal = await this.modalControler.create({
      component: IntiativeModalpopupPage,
      componentProps: {
        data: 'plus',
      }
    });

    return await modal.present();
  }
// popup modal
  async editModal(value) {
    // alert('2')

    this.buttonTrue = false;

    console.log(value);
    const modal = await this.modalControler.create({
      component: IntiativeModalpopupPage,
      componentProps: {
        data1: 'edit',
      }
    });

    return await modal.present();
  }

}
