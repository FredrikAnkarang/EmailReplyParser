<?php

namespace EmailReplyParser\Tests;

use EmailReplyParser\EmailReplyParser;

class SwedishEmailsTest extends TestCase
{
    public function testYahooEmail()
    {
        $body = $this->getFixtures('Swedish/yahoo.txt');

        $this->assertEquals('Hej igen, Här kommer ytterligare ett test.', EmailReplyParser::parseReply($body));
    }

    public function testGmailEmail()
    {
        $body = $this->getFixtures('Swedish/gmail.txt');

        $this->assertEquals('Hej!

Tack för du hörde av dig. Kan du berätta mer om rollen?', EmailReplyParser::parseReply($body));
    }

    public function testGmailEmail2()
    {
        $body = $this->getFixtures('Swedish/gmail2.txt');

        $this->assertEquals('Coolt tack för inbjudan.', EmailReplyParser::parseReply($body));
    }

    public function testGmailEmail3()
    {
        $body = $this->getFixtures('Swedish/gmail3.txt');

        $this->assertEquals('Hej!

Ja jag hör gärna mer om rollen.', EmailReplyParser::parseReply($body));
    }

    public function testKthEmail()
    {
        $body = $this->getFixtures('Swedish/kth.txt');

        $this->assertEquals('Hej!


Det låter intressant. Skicka avtalet.', EmailReplyParser::parseReply($body));
    }

    public function testGmailEngEmail()
    {
        $body = $this->getFixtures('Swedish/gmailEng.txt');

        $this->assertEquals('Hej igen,

Toppen, tack! Ordnat.', EmailReplyParser::parseReply($body));
    }

}
