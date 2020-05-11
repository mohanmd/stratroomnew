import { Component, OnInit } from '@angular/core';
import { CalendarComponentOptions } from 'ion2-calendar';

@Component({
  selector: 'app-rangecalendar',
  templateUrl: './rangecalendar.component.html',
  styleUrls: ['./rangecalendar.component.scss'],
})
export class RangecalendarComponent implements OnInit {
  dateRange: { from: string; to: string; };
  type: 'string'; // 'string' | 'js-date' | 'moment' | 'time' | 'object'
  optionsRange: CalendarComponentOptions = {
    pickMode: 'range'
  };

  constructor() { }

  ngOnInit() {}

}
