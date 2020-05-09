import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { SwotPage } from './swot.page';

describe('SwotPage', () => {
  let component: SwotPage;
  let fixture: ComponentFixture<SwotPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SwotPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(SwotPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
