
-- -----------------------------------------------------
-- Table `c9`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `c9`.`order` (
  `order_id` INT NOT NULL,
  `order_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `c9`.`meat_choice`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `c9`.`meat_choice` (
  `meat_choice_id` INT NOT NULL,
  `weight` VARCHAR(10) NULL,
  `type` VARCHAR(45) NULL,
  `cost` DECIMAL(10,2) NULL,
  PRIMARY KEY (`meat_choice_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `c9`.`burger`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `c9`.`burger` (
  `burger_num` INT NOT NULL,
  `order_order_id` INT NOT NULL,
  `bowl_or_bun` VARCHAR(5) NULL,
  `meat_choice_meat_choice_id` INT NOT NULL,
  PRIMARY KEY (`burger_num`, `order_order_id`),
  INDEX `fk_burger_order_idx` (`order_order_id` ASC),
  INDEX `fk_burger_meat_choice1_idx` (`meat_choice_meat_choice_id` ASC),
  CONSTRAINT `fk_burger_order`
    FOREIGN KEY (`order_order_id`)
    REFERENCES `c9`.`order` (`order_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_burger_meat_choice1`
    FOREIGN KEY (`meat_choice_meat_choice_id`)
    REFERENCES `c9`.`meat_choice` (`meat_choice_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

