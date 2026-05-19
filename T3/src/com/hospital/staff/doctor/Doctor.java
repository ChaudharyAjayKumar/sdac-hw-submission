package com.hospital.staff.doctor;

import com.hospital.staff.doctor.salary.Salary;

public class Doctor  extends Salary{
	public static void main(String[] args) {
		Doctor doctor=new Doctor();
		doctor.calculateSalary(2000, 200);
	}


class Doc extends com.hospital.staff.doctor.salary.Salary{
	public static void main(String[] args) {
		Doctor doctor=new Doctor();
		doctor.calculateSalary(2000, 200);
	}
}
}
