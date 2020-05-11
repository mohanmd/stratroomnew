import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';
import { MeetingeditpopupPage } from '../../meetingeditpopup/meetingeditpopup.page';

@Component({
  selector: 'app-view',
  templateUrl: './view.page.html',
  styleUrls: ['./view.page.scss'],
})
export class ViewPage implements OnInit {
  selectTabs = 'view';
  selectedDate:any=new Date(); 
  datePickerObj: any = {
    inputDate: new Date().toISOString().split('T')[0], // default new Date()
     fromDate: new Date(), // default null
     closeOnSelect: true, // default false
    // disableWeekDays: [4], // default []
     mondayFirst: true, // default false
     setLabel: 'Set',  // default 'Set'
     todayLabel: 'Today', // default 'Today'
     closeLabel: 'Close', // default 'Close'
     titleLabel: 'Select a Date', // default null
     monthsList: ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
     weeksList: ["S", "M", "T", "W", "T", "F", "S"],
     dateFormat: 'YYYY-MM-DD', // default DD MMM YYYY
     clearButton : false , // default true
     momentLocale: 'en-US', // Default 'en-US'
     yearInAscending: true, // Default false
     btnCloseSetInReverse: true, // Default false
     btnProperties: {
       expand: 'block', // Default 'block'
       fill: '', // Default 'solid'
       size: '', // Default 'default'
       disabled: '', // Default false
       strong: '', // Default false
       color: '' // Default ''
     },
     arrowNextPrev: {
       nextArrowSrc: 'assets/images/right-arrow.svg',
       prevArrowSrc: 'assets/images/left-arrow.svg'
     } // This object supports only SVG files.
   };

  constructor(private route: Router, public modalController: ModalController) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }
  async editpopup()
  {
    const modal = await this.modalController.create({
      component: MeetingeditpopupPage,
      componentProps: { 
        selectedDate: this.selectedDate,
        datePickerObj: this.datePickerObj
      }
    });
    return await modal.present();
  }
}
