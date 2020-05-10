import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { SwotdetailPage } from './swotdetail.page';

describe('SwotdetailPage', () => {
  let component: SwotdetailPage;
  let fixture: ComponentFixture<SwotdetailPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SwotdetailPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(SwotdetailPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
