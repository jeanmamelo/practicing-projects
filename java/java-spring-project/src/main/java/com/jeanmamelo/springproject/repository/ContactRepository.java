package com.jeanmamelo.springproject.repository;

import com.jeanmamelo.springproject.model.Contact;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface ContactRepository extends JpaRepository<Contact, Long> { }
